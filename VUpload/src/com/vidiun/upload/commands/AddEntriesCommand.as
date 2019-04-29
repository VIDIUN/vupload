package com.vidiun.upload.commands
{
	import com.vidiun.VidiunClient;
	import com.vidiun.commands.MultiRequest;
	import com.vidiun.commands.baseEntry.BaseEntryAddFromUploadedFile;
	import com.vidiun.commands.media.MediaAddFromUploadedFile;
	import com.vidiun.commands.notification.NotificationGetClientNotification;
	import com.vidiun.events.VidiunEvent;
	import com.vidiun.types.VidiunMediaType;
	import com.vidiun.types.VidiunNotificationType;
	import com.vidiun.upload.business.PartnerNotificationVO;
	import com.vidiun.upload.errors.VsuError;
	import com.vidiun.upload.events.VUploadErrorEvent;
	import com.vidiun.upload.events.VUploadEvent;
	import com.vidiun.upload.vo.FileVO;
	import com.vidiun.vo.VidiunBaseEntry;
	import com.vidiun.vo.VidiunClientNotification;
	import com.vidiun.vo.VidiunMediaEntry;
	
	import flash.events.Event;

	public class AddEntriesCommand extends BaseUploadCommand
	{

		public function AddEntriesCommand():void
		{
		}
		
		override public function execute():void
		{
			if (model.error)
			{
				throw new VsuError("Cannot add entries, some uploads failed. Either re-upload or remove the files", VsuError.CANNOT_ADD_ENTRIES);
				return;
			}
			var mr:MultiRequest = new MultiRequest();
			var requestIndex:int = 1;
			for each (var fileVo:FileVO in model.files) {
				//media entry
				if (fileVo.mediaTypeCode && (
					(fileVo.mediaTypeCode == VidiunMediaType.AUDIO.toString()) 
					|| (fileVo.mediaTypeCode == VidiunMediaType.VIDEO.toString())
					|| (fileVo.mediaTypeCode == VidiunMediaType.IMAGE.toString()))) 
				{
					var mediaEntry:VidiunMediaEntry = new VidiunMediaEntry();
					mediaEntry.mediaType = parseInt(fileVo.mediaTypeCode);
					updateVidiunBaseEntry(fileVo, mediaEntry as VidiunBaseEntry);
					var addMediaEntry:MediaAddFromUploadedFile = new MediaAddFromUploadedFile(mediaEntry, fileVo.token);
					mr.addAction(addMediaEntry);
				}
				//base entry
				else
				{
					var vidiunEntry:VidiunBaseEntry = new VidiunBaseEntry();
					updateVidiunBaseEntry(fileVo, vidiunEntry);
					var addEntry:BaseEntryAddFromUploadedFile = new BaseEntryAddFromUploadedFile (vidiunEntry, fileVo.token, fileVo.entryType);
					mr.addAction(addEntry);
				}
				requestIndex++;
				//get notifications for entry
				var getNotification:NotificationGetClientNotification = new NotificationGetClientNotification('entryId', VidiunNotificationType.ENTRY_ADD);
				mr.mapMultiRequestParam(requestIndex - 1, 'id', requestIndex, 'entryId')
				mr.addAction(getNotification);
				requestIndex++;
			}

			mr.addEventListener(VidiunEvent.COMPLETE, result);
			mr.addEventListener(VidiunEvent.FAILED, fault);
			
			model.context.vc.post(mr);
		}
		
		/**
		 * updates the given  VidiunBaseEntry according to the given fileVO
		 * @param fileVo the given FileVO
		 * @param vidiunBaseEntry the given baseEntry
		 * @return vidiunBaseEntry
		 * 
		 */		
		private function updateVidiunBaseEntry(fileVo:FileVO, vidiunBaseEntry:VidiunBaseEntry):void {
			vidiunBaseEntry.name	= fileVo.title;
			vidiunBaseEntry.creditUserName = model.screenName;
			vidiunBaseEntry.creditUrl = model.siteUrl;
			
			// Ignoring letter capitalization in the file's extension.
			var lowered:String = fileVo.extension.toLowerCase();
			if (model.conversionMapping != null && model.conversionMapping[lowered] != null){
				vidiunBaseEntry.conversionQuality = model.conversionMapping[lowered];
				vidiunBaseEntry.conversionProfileId = parseInt(model.conversionMapping[lowered]);
			} 
			else if (model.conversionProfile) {
				vidiunBaseEntry.conversionQuality = model.conversionProfile;
				vidiunBaseEntry.conversionProfileId = parseInt(model.conversionProfile);
			}
			
			vidiunBaseEntry.userId = model.context.userId;
			
			if (fileVo.tags.length > 0)
				vidiunBaseEntry.tags	= fileVo.tags.join(",");
			
			if (model.context.partnerData)
				vidiunBaseEntry.partnerData = model.context.partnerData;
			
			if (model.context.groupId)
				vidiunBaseEntry.groupId = parseInt(model.context.groupId);
		}
		
		/**
		 * handle result for "addentries" multirequest
		 * */
		private function result (event:VidiunEvent) : void {
			var resultArray:Array = event.data as Array;
			var notificationsArray:Array = new Array();
			for (var i:int = 0; i< resultArray.length; i++) {
				if (resultArray[i] is VidiunBaseEntry) {
					var entry:VidiunBaseEntry = resultArray[i] as VidiunBaseEntry;
					//location in model.files is always /2 since we also count here the notification requests
					(model.files[i/2] as FileVO).entryId = entry.id;
					(model.files[i/2] as FileVO).thumbnailUrl = entry.thumbnailUrl;
				} 
				else {
					dispatchAddEntryError();
				}
				//following response is for the get notofication request
				i++;
				if (resultArray[i] is VidiunClientNotification) {
					var notification:VidiunClientNotification = (resultArray[i] as VidiunClientNotification);
					var partnerNot:PartnerNotificationVO = new PartnerNotificationVO(notification.url, notification.data );
					notificationsArray.push(partnerNot);
				}
			}
			//handle notifications
			if (notificationsArray.length > 0)
			{
				var sendNotifications:SendNotificationsCommand = new SendNotificationsCommand(notificationsArray);
				sendNotifications.execute();
			}
			else
			{
				var notifyShell:NotifyShellCommand = new NotifyShellCommand(VUploadEvent.ENTRIES_ADDED, model.files);
				notifyShell.execute();
				//clear already added files
				model.files = [];
			}
			
			
		
		}
		
		private function fault (info:Object) : void {
			dispatchAddEntryError();
		}

	 	private function dispatchAddEntryError():void
		{
			var notifyShell:NotifyShellCommand = new NotifyShellCommand(VUploadErrorEvent.ADD_ENTRY_FAILED);
			notifyShell.execute();
		}
	}
}
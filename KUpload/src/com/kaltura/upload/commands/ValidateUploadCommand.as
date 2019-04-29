package com.vidiun.upload.commands
{
	import com.vidiun.upload.events.VUploadErrorEvent;
	import com.vidiun.upload.vo.FileVO;
	import com.vidiun.vo.importees.UploadStatusTypes;

	public class ValidateUploadCommand extends BaseUploadCommand
	{
		override public function execute():void
		{
			var uploadErrorIndices:Array = [];
			for (var i:int = 0; i < model.files.length; i++)
			{
				var fileVo:FileVO = model.files[i];
				if (fileVo.uploadStatus == UploadStatusTypes.UPLOAD_FAILED)
				{
					uploadErrorIndices.push(i);
				}
			}
			var anyUploadErrors:Boolean = uploadErrorIndices.length > 0;

			if (anyUploadErrors)
			{
				model.error = VUploadErrorEvent.UPLOAD_ERROR;
				model.uploadedErrorIndices = uploadErrorIndices;
			}
			else
			{
				model.error = null;
				model.uploadedErrorIndices = [];

			}
		}
	}
}
package com.vidiun.upload.events
{
	import flash.events.Event;

	public class VUploadErrorEvent extends Event
	{
		public static const VS_ERRORS:String = "vsErrors";
		public static const UPLOAD_ERROR:String = "uploadError";
		public static const ADD_ENTRY_FAILED:String = "addEntryFailed";
		public static const UI_CONF_ERROR:String = "uiConfError";


		public static const FILE_SIZE_EXCEEDS:String 	= "fileSizeExceeds";
		public static const TOTAL_SIZE_EXCEEDS:String 	= "totalSizeExceeds";
		public static const NUM_FILES_EXCEEDS:String 	= "numFilesExceeds";
		public static const WRONG_FILE_TYPE:String 		= "wrongFileType";

		public function VUploadErrorEvent(type:String, bubbles:Boolean = false, cancelable:Boolean = false)
		{
			super(type, bubbles, cancelable);
		}
	}
}
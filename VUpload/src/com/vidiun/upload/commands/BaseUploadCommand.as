package com.vidiun.upload.commands
{
	import com.vidiun.upload.model.VUploadModelLocator;

	import flash.events.EventDispatcher;

	public class BaseUploadCommand extends EventDispatcher
	{
		protected var model:VUploadModelLocator = VUploadModelLocator.getInstance();
		public function execute():void
		{
		}

	}
}
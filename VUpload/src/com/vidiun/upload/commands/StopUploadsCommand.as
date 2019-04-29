package com.vidiun.upload.commands
{
	import com.vidiun.upload.vo.FileVO;

	public class StopUploadsCommand extends BaseUploadCommand
	{
		override public function execute():void
		{
			model.currentlyUploadedFileVo.file.cancel();
			model.currentlyUploadedFileVo = null;
		}
	}
}
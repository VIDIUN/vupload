package com.vidiun.upload.commands
{
	import com.vidiun.upload.errors.VsuError;
	import com.vidiun.upload.vo.FileVO;

	public class SetTitleCommand extends BaseUploadCommand
	{
		private var _title:String;
		private var _startIndex:int;
		private var _endIndex:int;

		public function SetTitleCommand(title:String, startIndex:int, endIndex:int):void
		{
			_title = title;
			_startIndex = startIndex;
			_endIndex = endIndex;
		}

		override public function execute():void
		{
			for (var i:int = _startIndex; i < _endIndex + 1 ; i++)
			{
				var fileVo:FileVO = model.files[i];
				if (!fileVo)
					throw new VsuError("Can not set title, file with index " + i + " does not exist", VsuError.MISSING_FILE);
				fileVo.title = _title;
			}
		}
	}
}
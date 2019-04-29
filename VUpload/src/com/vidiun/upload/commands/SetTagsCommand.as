package com.vidiun.upload.commands
{
	import com.vidiun.upload.errors.VsuError;
	import com.vidiun.upload.vo.FileVO;
	
	import flash.sampler.startSampling;

	public class SetTagsCommand extends BaseUploadCommand
	{
		private var _tags:Array;
		private var _startIndex:int;
		private var _endIndex:int;

		public function SetTagsCommand(tags:Array, startIndex:int, endIndex:int):void
		{
			_tags = tags;
			_startIndex = startIndex;
			_endIndex = endIndex;
		}

		override public function execute():void
		{
			for (var i:int = _startIndex; i < _endIndex + 1 ; i++)
			{
				var fileVo:FileVO = model.files[i];
				if (!fileVo)
					throw new VsuError("Can not set tags, file with index " + i + " does not exist", VsuError.MISSING_FILE);
				fileVo.tags = _tags;
			}
		}
	}
}
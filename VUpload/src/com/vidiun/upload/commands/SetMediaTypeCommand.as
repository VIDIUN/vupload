package com.vidiun.upload.commands
{
	import com.vidiun.upload.errors.VsuError;
	import com.vidiun.upload.vo.FileFilterVO;

	public class SetMediaTypeCommand extends BaseUploadCommand
	{
		private var _mediaType:String;

		public function SetMediaTypeCommand(mediaType:String)
		{
			_mediaType = mediaType;
		}

		override public function execute():void
		{
			var fileFilterVo:FileFilterVO = model.fileFilterVoList[_mediaType];
			trace('change media type: ' +  _mediaType);
			if (fileFilterVo)
			{
				model.activeFileFilterVO = fileFilterVo;
				model.selectedFileFilterArr = new Array(model.activeFileFilterVO);
			}
			else
			{
				throw new VsuError("No such file filter id: " + _mediaType, VsuError.MISSING_FILTER_FOR_MEDIA_TYPE);
			}
		}

	}
}
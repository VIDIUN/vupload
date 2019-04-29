package com.vidiun.upload.commands
{
	import com.vidiun.upload.errors.VsuError;

	public class RemoveFilesCommand extends BaseUploadCommand
	{
		private var _startIndex:int;
		private var _endIndex:int;

		public function RemoveFilesCommand(startIndex:int, endIndex:int):void
		{
			_startIndex = startIndex;
			_endIndex = endIndex;
		}

		override public function execute():void
		{
			var deleteCount:int = _endIndex - _startIndex + 1;
			if (deleteCount <= 0)
				throw new VsuError("Files delete count (" + deleteCount + ") is not valid.", VsuError.FILES_RANGE_ERROR);
			else if (!model.files[_startIndex] || !model.files[_endIndex])
				throw new VsuError("Delete range error", VsuError.FILES_RANGE_ERROR);
			model.files.splice( _startIndex, deleteCount);

			var validateLimitationsCommand:ValidateLimitationsCommand = new ValidateLimitationsCommand();
			validateLimitationsCommand.execute();
		}

	}
}
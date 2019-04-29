package com.vidiun.upload.commands {
	import com.vidiun.net.PolledFileReference;
	import com.vidiun.upload.events.VUploadErrorEvent;
	import com.vidiun.upload.events.VUploadEvent;
	import com.vidiun.upload.vo.FileFilterVO;
	import com.vidiun.upload.vo.FileVO;
	
	import flash.events.Event;
	import flash.net.FileFilter;
	import flash.net.FileReference;
	import flash.net.FileReferenceList;
	
	import mx.collections.ArrayCollection;

	public class BrowseCommand extends BaseUploadCommand {
		private var _fileReferenceList:FileReferenceList;
		private var _singlefileReference:FileReference; //for cases where the limit is set to single file

		private var _files:Array; /*of FileReference*/
		private var _fileFilters:Array;
		private var _allowedExtensionsArray:Array


		override public function execute():void {
			_fileFilters = new Array(); 

			var filters:Array = (model.selectedFileFilterArr != null) ? model.selectedFileFilterArr : model.fileFiltersArr;

			for each (var ffVo:FileFilterVO in filters) {
				_fileFilters.push(ffVo.fileFilter);
			}

			if (model.maxUploads != 1) {
				_fileReferenceList = new FileReferenceList();
				_fileReferenceList.addEventListener(Event.SELECT, filesSelectHandler);
				_fileReferenceList.browse(_fileFilters);
			}
			else {
				_singlefileReference = new FileReference();
				_singlefileReference.addEventListener(Event.SELECT, filesSelectHandler);
				_singlefileReference.browse(_fileFilters);
			}
		}


		private function filesSelectHandler(selectEvent:Event):void {
			var files:Array = []; /*of FileReference*/
			_allowedExtensionsArray = new Array();
			for each (var ffilter:FileFilter in _fileFilters) {
				var extensions:Array = ffilter.extension.split(";");
				// make all extension lowercase
				for (var extIndex:int = 0; extIndex < extensions.length; extIndex++) {
					extensions[extIndex] = (extensions[extIndex] as String).toLowerCase();
				}
				_allowedExtensionsArray.push(new ArrayCollection(extensions));
			}

			// keep files in array
			if (selectEvent.target == _fileReferenceList)
				_files = _fileReferenceList.fileList;
			else
				_files = [_singlefileReference];

			model.selectedErrorIndices = new Array();

			// create FileVO and validate file type
			for (var i:int = 0; i < _files.length; i++) {
				var file:FileReference = _files[i] as FileReference;

				var fileVO:FileVO = new FileVO();
				fileVO.file = new PolledFileReference(file);
				fileVO.title = file.name;
				var nameSplitted:Array = file.name.split(".");
				fileVO.extension = nameSplitted[nameSplitted.length - 1];
				if (!isValidType(fileVO.extension)) {
					model.selectedErrorIndices.push(i);
					model.error = VUploadErrorEvent.WRONG_FILE_TYPE;
				}
				if (model.activeFileFilterVO) {
					fileVO.mediaTypeCode = model.activeFileFilterVO.mediaType;
					fileVO.entryType = model.activeFileFilterVO.entryType;
				}

				files.push(fileVO);
			}

			// add files to model
			model.files = model.files.concat(files);
			
			// validate files list
			if (model.selectedErrorIndices.length == 0) {
				trace('validate selected file(s)');
				var validateLimitationsCommand:ValidateLimitationsCommand = new ValidateLimitationsCommand();
				validateLimitationsCommand.execute();
				if (model.error == VUploadErrorEvent.FILE_SIZE_EXCEEDS || model.error == VUploadErrorEvent.TOTAL_SIZE_EXCEEDS || model.error == VUploadErrorEvent.NUM_FILES_EXCEEDS) {
					// Error - do not continue to next phase 
					model.files = [];
					return;
				}
			}
			trace('notify upload event with selected file(s)');
			var notifyShell:NotifyShellCommand = new NotifyShellCommand(VUploadEvent.SELECT);
			notifyShell.execute()
		}


		private function isValidType(type:String):Boolean {
			var lowerCase:String = type.toLowerCase();
			for (var i:int = 0; i < _allowedExtensionsArray.length; i++) {
				if ((_allowedExtensionsArray[i] as ArrayCollection).contains('*.' + lowerCase))
					return true;
			}

			return false;
		}

	}
}

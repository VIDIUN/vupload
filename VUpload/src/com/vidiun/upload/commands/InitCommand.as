package com.vidiun.upload.commands {
	import com.vidiun.VidiunClient;
	import com.vidiun.commands.uiConf.UiConfGet;
	import com.vidiun.config.VidiunConfig;
	import com.vidiun.events.VidiunEvent;
	import com.vidiun.net.TemplateURLVariables;
	import com.vidiun.upload.enums.VUploadStates;
	import com.vidiun.upload.errors.VsuError;
	import com.vidiun.upload.events.VUploadErrorEvent;
	import com.vidiun.upload.events.VUploadEvent;
	import com.vidiun.upload.vo.FileFilterVO;
	import com.vidiun.utils.VConfigUtil;
	import com.vidiun.vo.VidiunUiConf;
	
	import flash.events.Event;
	import flash.events.IOErrorEvent;
	import flash.events.SecurityErrorEvent;
	import flash.events.TimerEvent;
	import flash.net.FileFilter;
	import flash.net.URLLoader;
	import flash.net.URLRequest;
	import flash.utils.Dictionary;
	import flash.utils.Timer;

	public class InitCommand extends BaseUploadCommand {
		static private const MAP_PAIR_DLM:String = ";";
		static private const MAP_KEYS_VAL_DLM:String = ":";
		static private const MAP_KEY_LIST_DLM:String = ",";

		private var _params:Object;
		private var _innerParams:Object;
		private var _configLoader:URLLoader;


		public function InitCommand(params:Object, innerParams:Object = null) {
			_params = params;
			_innerParams = innerParams;
		}


		override public function execute():void {
			trace('execute init command');
			model.state = VUploadStates.INITIALIZING;
			saveBaseFlashVars();

			setModelData();
			loadConfiguration();
		}


		private function saveBaseFlashVars():void {
			var config:VidiunConfig = new VidiunConfig();
			var hostFlashvar:String = _params.host;
			var protocol:String;
			var domain:String;
			
			if (_params.hasOwnProperty("protocol")) {
				protocol = _params.protocol;
			}

			/* 
			* protocol:
			* 1 - protocol flashvar
			* 2 - if host includes protocol, use it
			* 3 - use http
			* domain:
			* if host contains protocol, strip it.
			*/
			if (hostFlashvar.substr(0, 4) == "http") {
				var protocolEndIndex:int = hostFlashvar.indexOf('//') + 2;
				if (!protocol) {
					// takes the prefix of host, 'http://' or 'https://'
					protocol = hostFlashvar.substr(0, protocolEndIndex);
				}
				domain = hostFlashvar.substr(protocolEndIndex);
			}
			else {
				domain = hostFlashvar;
			}

			if (!protocol) {
				protocol = "http://";
			}
			
			config.protocol = protocol;
			config.domain = domain;


			config.vs = _params.vs;
			config.partnerId = _params.partnerId;

			model.context.vc = new VidiunClient(config);
			model.context.subPartnerId = _params.partnerId;
			model.context.userId = _params.uid;
			model.context.partnerData = _params.partnerData;
			model.context.permissions = _params.permissions;
			model.context.groupId = _params.groupId;
			model.entryId = _params.entryId;
			model.uiConfId = _params.uiConfId;
			if (_params.vuploadUiconfId)
				model.uiConfId = _params.vuploadUiconfId;
			model.jsDelegate = _params.jsDelegate;

			model.externalInterfaceEnable = _params.externalInterfaceDisabled != '1';
			model.siteUrl = _params.siteUrl;
			model.screenName = _params.screenName;

			if (_innerParams != null) {
				model.uploadHost = _innerParams.uploadHost;
			}
		}



		private function setModelData():void {
			model.baseRequestData = {vs: model.context.vc.vs,
					partner_id: model.context.vc.partnerId,
					subp_id: model.context.subPartnerId,
					uid: model.context.userId};
		}


		/**
		 * request vsu uiconf
		 * */
		private function loadConfiguration():void {
			var uiconfGet:UiConfGet = new UiConfGet(parseInt(model.uiConfId));
			uiconfGet.addEventListener(VidiunEvent.COMPLETE, uiconfResult);
			uiconfGet.addEventListener(VidiunEvent.FAILED, uiconfFault);
			model.context.vc.post(uiconfGet);
		}


		private function uiconfFault(info:Object):void {
			var notifyShell:NotifyShellCommand = new NotifyShellCommand(VUploadErrorEvent.UI_CONF_ERROR);
			notifyShell.execute();
		}


		private function uiconfResult(event:VidiunEvent):void {
			var result:VidiunUiConf = event.data as VidiunUiConf;
			parseConfiguration(new XML(result.confFile));
			saveConfigurationFlashVars();
			vuploadReady();

		}


		/**
		 * parse uiconf xml
		 * */
		private function parseConfiguration(configXml:XML):void {
			var xmlFileFilters:XML = configXml.fileFilters[0];
			var fileFilters:Dictionary = new Dictionary();
			var fileFiltersArr:Array = new Array();
			for each (var xmlFileFilter:XML in xmlFileFilters.fileFilter) {
				var description:String = xmlFileFilter.@description;
				var extensions:String = xmlFileFilter.@extensions;

				var singlefileFilter:FileFilter = new FileFilter(description, extensions);
				var entryType:String = xmlFileFilter.@entryType;
				var mediaType:String = xmlFileFilter.@mediaType;
				var fileFilterVo:FileFilterVO = new FileFilterVO(singlefileFilter, mediaType, entryType);

				fileFilters[xmlFileFilter.@id.toString()] = fileFilterVo;

				fileFiltersArr.push(fileFilterVo);
			}
			model.fileFilterVoList = fileFilters;
			model.fileFiltersArr = fileFiltersArr;
			model.activeFileFilterVO = fileFilters[xmlFileFilters.@default.toString()];
			if (model.activeFileFilterVO)
				setFiltersOrder();

			var xmlLimits:XML = configXml.limits[0];
			model.maxUploads = VConfigUtil.getDefaultValue(xmlLimits.@maxUploads[0], model.maxUploads);
			model.maxFileSize = VConfigUtil.getDefaultValue(xmlLimits.@maxFileSize[0], model.maxFileSize);
			model.maxTotalSize = VConfigUtil.getDefaultValue(xmlLimits.@maxTotalSize[0], model.maxTotalSize);

			model.conversionProfile = VConfigUtil.getDefaultValue(configXml.@conversionProfile[0], model.conversionProfile);
			model.uploadUrl = VConfigUtil.getDefaultValue(configXml.@uploadUrl, model.uploadUrl);

			var map:Object = parseCMUIVar(configXml);
			model.conversionMapping = map != null ? map : model.conversionMapping;
		}


		// Parses the conversion mapping from the loaded UIconf
		private function parseCMUIVar(configXml:XML):Object {
			var map:Object = new Object();
			if (configXml.conversionMapping.length() > 0 && configXml.conversionMapping.profile.length() > 0) {
				var profileList:XMLList = configXml.conversionMapping[0].profile;
				for each (var profile:XML in profileList) {
					var convID:String = profile.@id.toString();
					var extStrs:Array = profile.@extensions.toString().split(";");
					for each (var extStr:String in extStrs) {

						// Converting letter capitalization to lower case to enable ignore case later.
						var extension:String = (extStr.split(".")[1] as String).toLowerCase();
						map[extension] = convID;
					}
				}
			}
			else {
				return null;
			}

			return map;
		}


		private function dispatchUiConfError():void {
			var notifyShell:NotifyShellCommand = new NotifyShellCommand(VUploadErrorEvent.UI_CONF_ERROR);
			notifyShell.execute();
		}


		private function vuploadReady():void {
			model.state = VUploadStates.READY
			var notifyShellCommand:NotifyShellCommand = new NotifyShellCommand(VUploadEvent.READY);
			notifyShellCommand.execute();
		}


		private function saveConfigurationFlashVars():void {
			model.quickEdit = VConfigUtil.getDefaultValue(_params.quickEdit, model.quickEdit);
			model.maxFileSize = VConfigUtil.getDefaultValue(_params.maxFileSize, model.maxFileSize);
			model.maxTotalSize = VConfigUtil.getDefaultValue(_params.maxTotalSize, model.maxTotalSize);
			model.maxUploads = VConfigUtil.getDefaultValue(_params.maxUploads, model.maxUploads);
			model.conversionProfile = VConfigUtil.getDefaultValue(_params.conversionProfile, model.conversionProfile);
			model.uploadUrl = VConfigUtil.getDefaultValue(_params.uploadUrl, model.uploadUrl);

			if (_params.conversionMapping != null) {
				var map:Object = parseCMFlashVar(_params.conversionMapping);
				model.conversionMapping = map != null ? map : model.conversionMapping;
			}
		}


		// Parses the conversion mapping from a properly formatted string 
		private function parseCMFlashVar(value:String):Object {
			var mapObj:Object = new Object();
			var pairs:Array = value.split(MAP_PAIR_DLM);
			for each (var pair:String in pairs) {
				if (pair.length > 0) {
					if (pair.indexOf(MAP_KEYS_VAL_DLM) != -1) {
						var keysNValue:Array = pair.split(MAP_KEYS_VAL_DLM);
						var keysStr:String = keysNValue[0] as String;
						var keys:Array = keysStr.split(MAP_KEY_LIST_DLM);
						var convProfile:String = keysNValue[1] as String;
						for each (var extension:String in keys) {

							// Converting letter capitalization to lower case to enable ignore case later.
							var lowerExt:String = extension.toLowerCase();
							if (mapObj[lowerExt] == null) {
								mapObj[lowerExt] = convProfile;
							}
						}
					}
					else {
						prepareWarningError("The conversionMapping flashVar is formatted incorrectly. The keys and conversion profile ID in each set must be seperated by a colon (:) sign.");
						return null;
					}
				}
			}

			return mapObj;
		}


		private function prepareWarningError(message:String):void {
			function warningErrorTimerHandler(evt:TimerEvent):void {
				var timer:Timer = evt.target as Timer
				throw new VsuError("Warning: " + message, VsuError.WARNING);
			}
			var timer:Timer = new Timer(0, 1);
			timer.addEventListener(TimerEvent.TIMER_COMPLETE, warningErrorTimerHandler);
			timer.start();
		}


		private function setFiltersOrder():void {
			var fileFilters:Array = new Array();
			var fileFilterVo:FileFilterVO = model.activeFileFilterVO;
			for each (var ffVo:FileFilterVO in model.fileFiltersArr) {
				if (ffVo.mediaType == fileFilterVo.mediaType) {
					fileFilters.push(ffVo);
					break;
				}
			}

			model.selectedFileFilterArr = fileFilters;
		}

	}
}

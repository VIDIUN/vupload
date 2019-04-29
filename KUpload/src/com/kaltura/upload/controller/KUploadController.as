package com.vidiun.upload.controller
{
	public class VUploadController
	{
		private static var _instance:VUploadController = null;
		private var _vUpload:VUpload;
		
		public function VUploadController(enforcer:Enforcer){}
		
		public static function getInstance():VUploadController
		{
			if(_instance == null)
			{
				_instance = new VUploadController(new Enforcer());
			}
			return _instance;
		}
		
		public function registerApp(loader:VUpload):void
		{
			_vUpload = loader;
		}
		
		public function getApp():VUpload
		{
			return _vUpload;
		}

	}
}

class Enforcer
{
	
}
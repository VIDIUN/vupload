private static var _instance:VUploadModelLocator;

public function VUploadModelLocator()
{
	if (_instance == null)
	{
		_instance = this;
	}

}

public static function getInstance():VUploadModelLocator
{
	if (_instance == null)
	{
		_instance = new VUploadModelLocator();
	}
	return _instance;
}
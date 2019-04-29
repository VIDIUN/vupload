package com.vidiun.upload.errors
{
	/**
	 * Enumeration of errors thrown by VSU, allows handling errors in code.
	 * @author atar.shadmi
	 */
	public class VsuError extends Error
	{
		public static const MISSING_FILE:int = 101;
		public static const LIMITATIONS_EXCEEDED:int = 102;
		public static const CANNOT_ADD_ENTRIES:int = 103;
		public static const MISSING_FILTER_FOR_MEDIA_TYPE:int = 104;
		public static const FILES_RANGE_ERROR:int = 105;
		public static const WARNING:int = 106;
		
		
		public function VsuError(message:*="", id:*=0)
		{
			super(message, id);
		}
	}
}
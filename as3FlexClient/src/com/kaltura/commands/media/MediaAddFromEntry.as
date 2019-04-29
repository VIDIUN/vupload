// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Vidiun Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2011  Vidiun Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================
package com.vidiun.commands.media
{
	import com.vidiun.vo.VidiunMediaEntry;
	import com.vidiun.delegates.media.MediaAddFromEntryDelegate;
	import com.vidiun.net.VidiunCall;

	/**
	 * Copy entry into new entry
	 * 
	 **/
	public class MediaAddFromEntry extends VidiunCall
	{
		public var filterFields : String;
		
		/**
		 * @param sourceEntryId String
		 * @param mediaEntry VidiunMediaEntry
		 * @param sourceFlavorParamsId int
		 **/
		public function MediaAddFromEntry( sourceEntryId : String,mediaEntry : VidiunMediaEntry=null,sourceFlavorParamsId : int=int.MIN_VALUE )
		{
			service= 'media';
			action= 'addFromEntry';

			var keyArr : Array = new Array();
			var valueArr : Array = new Array();
			var keyValArr : Array = new Array();
			keyArr.push('sourceEntryId');
			valueArr.push(sourceEntryId);
 			if (mediaEntry) { 
 			keyValArr = vidiunObject2Arrays(mediaEntry, 'mediaEntry');
			keyArr = keyArr.concat(keyValArr[0]);
			valueArr = valueArr.concat(keyValArr[1]);
 			} 
			keyArr.push('sourceFlavorParamsId');
			valueArr.push(sourceFlavorParamsId);
			applySchema(keyArr, valueArr);
		}

		override public function execute() : void
		{
			setRequestArgument('filterFields', filterFields);
			delegate = new MediaAddFromEntryDelegate( this , config );
		}
	}
}

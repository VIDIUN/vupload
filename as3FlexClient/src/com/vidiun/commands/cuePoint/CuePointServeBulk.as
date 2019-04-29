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
package com.vidiun.commands.cuePoint
{
	import com.vidiun.vo.VidiunCuePointFilter;
	import com.vidiun.vo.VidiunFilterPager;
	import com.vidiun.delegates.cuePoint.CuePointServeBulkDelegate;
	import com.vidiun.net.VidiunCall;

	/**
	 * Download multiple cue points objects as XML definitions
	 * 
	 **/
	public class CuePointServeBulk extends VidiunCall
	{
		public var filterFields : String;
		
		/**
		 * @param filter VidiunCuePointFilter
		 * @param pager VidiunFilterPager
		 **/
		public function CuePointServeBulk( filter : VidiunCuePointFilter=null,pager : VidiunFilterPager=null )
		{
			service= 'cuepoint_cuepoint';
			action= 'serveBulk';

			var keyArr : Array = new Array();
			var valueArr : Array = new Array();
			var keyValArr : Array = new Array();
 			if (filter) { 
 			keyValArr = vidiunObject2Arrays(filter, 'filter');
			keyArr = keyArr.concat(keyValArr[0]);
			valueArr = valueArr.concat(keyValArr[1]);
 			} 
 			if (pager) { 
 			keyValArr = vidiunObject2Arrays(pager, 'pager');
			keyArr = keyArr.concat(keyValArr[0]);
			valueArr = valueArr.concat(keyValArr[1]);
 			} 
			applySchema(keyArr, valueArr);
		}

		override public function execute() : void
		{
			setRequestArgument('filterFields', filterFields);
			delegate = new CuePointServeBulkDelegate( this , config );
		}
	}
}

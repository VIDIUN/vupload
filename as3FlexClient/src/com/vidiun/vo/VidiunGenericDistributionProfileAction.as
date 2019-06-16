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
package com.vidiun.vo
{
	import com.vidiun.vo.BaseFlexVo;

	[Bindable]
	public dynamic class VidiunGenericDistributionProfileAction extends BaseFlexVo
	{
		/**
		 * @see com.vidiun.types.VidiunDistributionProtocol
		 **/
		public var protocol : int = int.MIN_VALUE;

		/**
		 **/
		public var serverUrl : String = null;

		/**
		 **/
		public var serverPath : String = null;

		/**
		 **/
		public var username : String = null;

		/**
		 **/
		public var password : String = null;

		/**
		 * @see com.vidiun.types.vidiunBoolean
		 **/
		public var ftpPassiveMode : Boolean;

		/**
		 **/
		public var httpFieldName : String = null;

		/**
		 **/
		public var httpFileName : String = null;

		/** 
		 * a list of attributes which may be updated on this object 
		 **/ 
		public function getUpdateableParamKeys():Array
		{
			var arr : Array;
			arr = new Array();
			arr.push('protocol');
			arr.push('serverUrl');
			arr.push('serverPath');
			arr.push('username');
			arr.push('password');
			arr.push('ftpPassiveMode');
			arr.push('httpFieldName');
			arr.push('httpFileName');
			return arr;
		}

		/** 
		 * a list of attributes which may only be inserted when initializing this object 
		 **/ 
		public function getInsertableParamKeys():Array
		{
			var arr : Array;
			arr = new Array();
			return arr;
		}
	}
}
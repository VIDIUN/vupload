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
package com.vidiun.commands.report
{
	import com.vidiun.vo.VidiunReportInputFilter;
	import com.vidiun.vo.VidiunFilterPager;
	import com.vidiun.delegates.report.ReportGetUrlForReportAsCsvDelegate;
	import com.vidiun.net.VidiunCall;

	/**
	 * will create a Csv file for the given report and return the URL to access it
	 * 
	 **/
	public class ReportGetUrlForReportAsCsv extends VidiunCall
	{
		public var filterFields : String;
		
		/**
		 * @param reportTitle String
		 * @param reportText String
		 * @param headers String
		 * @param reportType int
		 * @param reportInputFilter VidiunReportInputFilter
		 * @param dimension String
		 * @param pager VidiunFilterPager
		 * @param order String
		 * @param objectIds String
		 **/
		public function ReportGetUrlForReportAsCsv( reportTitle : String,reportText : String,headers : String,reportType : int,reportInputFilter : VidiunReportInputFilter,dimension : String = null,pager : VidiunFilterPager=null,order : String = null,objectIds : String = null )
		{
			service= 'report';
			action= 'getUrlForReportAsCsv';

			var keyArr : Array = new Array();
			var valueArr : Array = new Array();
			var keyValArr : Array = new Array();
			keyArr.push('reportTitle');
			valueArr.push(reportTitle);
			keyArr.push('reportText');
			valueArr.push(reportText);
			keyArr.push('headers');
			valueArr.push(headers);
			keyArr.push('reportType');
			valueArr.push(reportType);
 			keyValArr = vidiunObject2Arrays(reportInputFilter, 'reportInputFilter');
			keyArr = keyArr.concat(keyValArr[0]);
			valueArr = valueArr.concat(keyValArr[1]);
			keyArr.push('dimension');
			valueArr.push(dimension);
 			if (pager) { 
 			keyValArr = vidiunObject2Arrays(pager, 'pager');
			keyArr = keyArr.concat(keyValArr[0]);
			valueArr = valueArr.concat(keyValArr[1]);
 			} 
			keyArr.push('order');
			valueArr.push(order);
			keyArr.push('objectIds');
			valueArr.push(objectIds);
			applySchema(keyArr, valueArr);
		}

		override public function execute() : void
		{
			setRequestArgument('filterFields', filterFields);
			delegate = new ReportGetUrlForReportAsCsvDelegate( this , config );
		}
	}
}

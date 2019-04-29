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
package com.vidiun {
	import com.vidiun.commands.QueuedRequest;
	import com.vidiun.config.VidiunConfig;
	import com.vidiun.net.VidiunCall;
	
	import flash.events.Event;
	import flash.events.EventDispatcher;

	public class VidiunClient extends EventDispatcher {
		
		[Event(name="callQueued", type="Event")]
		
		[Event(name="queueFlushed", type="Event")]
		
		public static const CALL_QUEUED:String = "callQueued"; 
		public static const QUEUE_FLUSHED:String = "queueFlushed"; 

		public static const NULL_INT:int = int.MAX_VALUE; 
		public static const NULL_NUMBER:Number = Number.POSITIVE_INFINITY; 
		public static const NULL_STRING:String = "__null_string__"; 
		
		
		protected var _currentConfig:VidiunConfig;

		/**
		 * @copy #queueing
		 */
		protected var _queueing:Boolean = false;
		
		/**
		 * the object used to queue requests 
		 */		
		protected var _queue:QueuedRequest;


		public function VidiunClient(config:VidiunConfig) {
			_currentConfig = config;
		}


		//Setters & Getters
		/**
		 * @copy VidiunConfig#partnerId
		 */
		public function get partnerId():String {
			return _currentConfig ? this._currentConfig.partnerId : null;
		}


		/**
		 * @copy VidiunConfig#domain
		 */
		public function get domain():String {
			return _currentConfig ? this._currentConfig.domain : null;
		}


		/**
		 * @copy VidiunConfig#vs
		 */
		public function set vs(currentConfig:String):void {
			_currentConfig.vs = currentConfig;
		}


		[Bindable]
		public function get vs():String {
			return _currentConfig ? this._currentConfig.vs : null;
		}


		/**
		 * @copy VidiunConfig#protocol
		 */
		public function set protocol(value:String):void {
			_currentConfig.protocol = value;
		}


		public function get protocol():String {
			return _currentConfig.protocol;
		}


		/**
		 * @copy VidiunConfig#clientTag
		 */
		public function set clientTag(value:String):void {
			_currentConfig.clientTag = value;
		}


		public function get clientTag():String {
			return _currentConfig.clientTag;
		}


		public function post(call:VidiunCall):VidiunCall {
			if (_currentConfig) {
				call.config = _currentConfig;
				call.initialize();
				if (_queueing && call.queued) {
					queue(call);
				} 
				else {
					call.execute();
				}
			}
			else {
				throw new Error("Cannot post a call; no vidiun config has been set.");
			}
			return call;
		}
		
		/**
		 * add a call to the calls queue 
		 * @param call call to add
		 */
		protected function queue(call:VidiunCall):void {
			if (!_queue) {
				_queue = new QueuedRequest();
			}
			_queue.addAction(call);
			dispatchEvent(new Event(VidiunClient.CALL_QUEUED));
		}
		
		
		/**
		 * post all calls in the queue and reset it.
		 */
		public function flush():void {
			if (_queue) {
				if (_queue.calls.length > 1) {
					post(_queue);
				} else {
					// if there is only one call, don't post it as a multirequest.
					// this makes fiddler easier to use.
					_queue.calls[0].execute();
				}
				_queue = null;
				dispatchEvent(new Event(VidiunClient.QUEUE_FLUSHED));
			}
		}


		/**
		 * determines whether the client works in queueing mode or not.
		 * */
		public function get queueing():Boolean {
			return _queueing;
		}


		/**
		 * @private
		 */
		public function set queueing(value:Boolean):void {
			_queueing = value;
		}

	}
}
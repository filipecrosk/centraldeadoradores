<?php

class Internals_Message {
	
	public static function error($msg){
		$sessao = new Zend_Session_Namespace("Alert");
		$tmp = array();
		if(isset($sessao->error)) {
			$tmp = $sessao->error;
		}
		$tmp[] = $msg;
		$sessao->error = $tmp;
	}
	
	public static function getError(){
		$sessao = new Zend_Session_Namespace("Alert");
		$msgs = $sessao->error;
		unset($sessao->error);
		return $msgs;
	}
	
	public static function hasError(){
		$sessao = new Zend_Session_Namespace("Alert");
		if(isset($sessao->error))
			return true;
		return false;
	}
	public static function success($msg){
		$sessao = new Zend_Session_Namespace("Alert");
		$tmp = array();
		if(isset($sessao->success)) {
			$tmp = $sessao->success;
		}
		$tmp[] = $msg;
		$sessao->success = $tmp;
	}
	
	public static function getSuccess(){
		$sessao = new Zend_Session_Namespace("Alert");
		$msgs = $sessao->success;
		unset($sessao->success);
		return $msgs;
	}
	
	public static function hasSuccess(){
		$sessao = new Zend_Session_Namespace("Alert");
		if(isset($sessao->success))
			return true;
		return false;
	}
	
	public static function info($msg){
		$sessao = new Zend_Session_Namespace("Alert");
		$tmp = array();
		if(isset($sessao->info)) {
			$tmp = $sessao->info;
		}
		$tmp[] = $msg;
		$sessao->info = $tmp;
	}
	
	public static function getInfo(){
		$sessao = new Zend_Session_Namespace("Alert");
		$msgs = $sessao->info;
		unset($sessao->info);
		return $msgs;
	}
	
	public static function hasInfo(){
		$sessao = new Zend_Session_Namespace("Alert");
		if(isset($sessao->info))
			return true;
		return false;
	}
	
	public static function alert($msg){
		$sessao = new Zend_Session_Namespace("Alert");
		$tmp = array();
		if(isset($sessao->alert)) {
			$tmp = $sessao->alert;
		}
		$tmp[] = $msg;
		$sessao->alert = $tmp;
	}
	
	public static function getAlert(){
		$sessao = new Zend_Session_Namespace("Alert");
		$msgs = $sessao->alert;
		unset($sessao->alert);
		return $msgs;
	}
	
	public static function hasAlert(){
		$sessao = new Zend_Session_Namespace("Alert");
		if(isset($sessao->alert))
			return true;
		return false;
	}
}

?>
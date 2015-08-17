<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initPropel() {
		require_once 'propel-1.5.6/runtime/lib/Propel.php';
		Propel::init(APPLICATION_PATH . "/models/conf/centraldeadoradores-conf.php");
	}
	
}
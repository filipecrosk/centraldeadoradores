<?php

class ImportacaoController extends Zend_Controller_Action {
	
	public function indexAction() {
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		/*
		 $dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'password';
		$dbname = 'phpcake';
		
		// This is an example opendb.php
		$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
		mysql_select_db($dbname);
		*/
	}

}

<?php

class ImportacaoController extends Zend_Controller_Action {
	
	public function indexAction() {
		
	}
	
	public function testeAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
		if ($_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
			$fileName = $_FILES['arquivo']['name'];
			$tmpName  = $_FILES['arquivo']['tmp_name'];
			$fileSize = $_FILES['arquivo']['size'];
			$fileType = $_FILES['arquivo']['type'];
		
			$fp      = fopen($tmpName, 'r');
			$content = fread($fp, filesize($tmpName));
			$content = addslashes($content);
			fclose($fp);
		
			if(!get_magic_quotes_gpc())
			{
				$fileName = addslashes($fileName);
			}
			echo "file name: ".$fileName."<br>";
			echo "temp name: ".$tmpName."<br>";
			echo "file size:".$fileSize."<br>";
			echo "file type:".$fileType."<br>";
			$fp      = fopen($tmpName, 'r');
			$content = fread($fp, filesize($tmpName));
			echo "content: ".$content."<br>";
		} else {
			die("Upload failed with error code " . $_FILES['arquivo']['error']);
		}
	}

}

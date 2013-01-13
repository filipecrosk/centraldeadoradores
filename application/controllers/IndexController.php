<?php

class IndexController extends Internals_Controller_CloseAction
{

    public function init()
    {
        /* Initialize action controller here */
    	parent::init();
    }

    public function indexAction()
    {
    	$this->_redirect("escala");
    }

    public function emailAction(){
    	set_time_limit (0);
    	
    	$this->_helper->layout()->disableLayout();
    	$this->_helper->viewRenderer->setNoRender();
    	$usuarios = UsuarioQuery::create()
    		->filterByDesabilitado(0)
    		->find();
    	/*
    	foreach ($usuarios as $usuario){
	    	try{
	    		
				$settings = array('ssl'=>'ssl',
						'port'=>465,
						'auth' => 'login',
						'username' => 'centraldeadoradores@centraldeadoradores.com.br',
						'password' => 'adoradoresmail');
				$transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $settings);
				$email_from = "centraldeadoradores@centraldeadoradores.com.br";
				$name_from = "Central de Adoradores";
				$mail = new Zend_Mail("UTF-8");
				$mail->setReplyTo($email_from, $name_from);
				$mail->setFrom ($email_from, $name_from);
				$mail->addTo ($usuario->getEmail(), $usuario->getNome());
				$mail->setSubject ('Avaliações - Central de Adoradores');
				$mail->setBodyHtml("<div style='width:700px;'>
										<h2>Avaliações</h2>
										<p>Olá pessoal,</p>
										<p>
											envio o convite para o Festival de Tortas do Coral. Estamos arrecando ofertas para o Festival Libertarte. Participe! Traga 
											convidados! Segunda, 17/09, às 21h, na sala do Coral, IBC2.
										</p> 
										<p> 
											Até lá!
										</p>
										<hr>
										<p> 
											Denise.
										</p>
									</div>", "UTF-8");
				
				$fileContents1 = file_get_contents('../upload/Festivaltortas.jpg');
				$file1 = $mail->createAttachment($fileContents1);
				$file1->filename = "Festivaltortas.jpg";
				/*
				$fileContents2 = file_get_contents('../upload/Avulsas.png');
				$file2 = $mail->createAttachment($fileContents2);
				$file2->filename = "Avulsas.png";
				
				$fileContents3 = file_get_contents('../upload/Bateria.png');
				$file3 = $mail->createAttachment($fileContents3);
				$file3->filename = "Bateria.png";
				
				$fileContents4 = file_get_contents('../upload/Guitarra.png');
				$file4 = $mail->createAttachment($fileContents4);
				$file4->filename = "Guitarra.png";
				
				$fileContents5 = file_get_contents('../upload/Teclado.png');
				$file5 = $mail->createAttachment($fileContents5);
				$file5->filename = "Teclado.png";
				
				$mail->send($transport);
				sleep (2);
				
				echo $usuario->getId()." - ".$usuario->getNome()."<br>";
	    	} catch(Exception $ex){
	    		echo "erro";
	    	}
    	}
    	*/
    }

}


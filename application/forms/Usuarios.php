<?php

class Application_Form_Usuarios extends EasyBib_Form
{
    public function init()
    {
		//
		$this->setName("NovoUsuarioForm");
    	$this->addAttribs(array("class"=>"form-horizontal"));
    	
        // create elements
        
    	$id          = new Zend_Form_Element_Hidden('id');
        $nome        = new Zend_Form_Element_Text('nome');
        $apelido        = new Zend_Form_Element_Text('apelido');
        $mail        = new Zend_Form_Element_Text('email');
        $banda  	 = new Zend_Form_Element_Select('banda');
                
        // config elements

        $mail->setLabel('E-Mail:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true)
            ->addValidator('emailAddress');

        $nome->setLabel('Nome:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true);
        
        $apelido->setLabel('Apelido:')
        ->setAttrib('class', 'input-xlarge');

        $bandas = array("");
        foreach (BandaQuery::create()->find() as $band){
        	$bandas[$band->getId()] = $band->getNome();
        }
        
        $banda->setLabel("Banda: ")
        	->setAttrib('class', 'input-xlarge')
        	->addMultiOptions($bandas);
        

        // add elements
        $this->addElements(array(
            $id, $nome, $apelido, $mail, $banda
        ));

        // add display group
        $this->addDisplayGroup(
            array('nome', 'apelido', 'email', 'banda'),
            'usuario'
        );


        // set decorators
        EasyBib_Form_Decorator::setFormDecorator($this, EasyBib_Form_Decorator::BOOTSTRAP, null, null);

    }

}
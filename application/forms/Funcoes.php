<?php

class Application_Form_Funcoes extends EasyBib_Form
{
    public function init()
    {
		//
		$this->setName("NovaBandaForm");
    	$this->addAttribs(array("class"=>"form-horizontal"));
    	
        // create elements
        
    	$id          = new Zend_Form_Element_Hidden('id');
        $nome        = new Zend_Form_Element_Text('nome');
        
        // config elements

        $nome->setLabel('Nome da Função:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true);

        // add elements
        $this->addElements(array(
            $id, $nome
        ));
        
        // set decorators
        EasyBib_Form_Decorator::setFormDecorator($this, EasyBib_Form_Decorator::BOOTSTRAP, null, null);
    }
}
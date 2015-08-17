<?php

class Application_Form_Locais extends EasyBib_Form
{
    public function init()
    {
		//
		$this->setName("NovoLocalForm");
    	$this->addAttribs(array("class"=>"form-horizontal"));
    	
        // create elements
        
    	$id          = new Zend_Form_Element_Hidden('id');
        $nome        = new Zend_Form_Element_Text('nome');
        $endereco  	 = new Zend_Form_Element_Text('endereco');
        
        // config elements

        $nome->setLabel('Nome do Local:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true);
        
        $endereco->setLabel('Endereço:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true);

        // add elements
        $this->addElements(array(
            $id, $nome, $endereco
        ));

        // add display group
        $this->addDisplayGroup(
            array('nome', 'endereco'),
            'local'
        );
        
        // set decorators
        EasyBib_Form_Decorator::setFormDecorator($this, EasyBib_Form_Decorator::BOOTSTRAP, null, null);
    }
}
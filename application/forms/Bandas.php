<?php

class Application_Form_Bandas extends EasyBib_Form
{
    public function init()
    {
		//
		$this->setName("NovaBandaForm");
    	$this->addAttribs(array("class"=>"form-horizontal"));
    	
        // create elements
        
    	$id          = new Zend_Form_Element_Hidden('id');
        $nome        = new Zend_Form_Element_Text('nome');
        $lider  	 = new Zend_Form_Element_Text('lider');
        
        // config elements

        $nome->setLabel('Nome da Banda:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true);
        
        $lider->setLabel('Nome do Líder:')
        	->setAttrib('class', 'input-xlarge')
            ->setRequired(true);

        // add elements
        $this->addElements(array(
            $id, $nome, $lider
        ));

        // add display group
        $this->addDisplayGroup(
            array('nome', 'lider'),
            'banda'
        );
        
        // set decorators
        EasyBib_Form_Decorator::setFormDecorator($this, EasyBib_Form_Decorator::BOOTSTRAP, null, null);
    }
}
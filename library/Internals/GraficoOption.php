<?php

class Internals_GraficoOption {
	
	private $options = array();
	
	function __construct() {
	
	}
	
	public function addOption($option){
		array_push($this->options, $option);
	}
	/*
	 {
	          title : 'Disponibilidade diária',
	          vAxis: {title: "Quantidade de pessoas livre"},
	          hAxis: {title: "Segunda"},
	          seriesType: "bars"
          } 
	 */
	public function getOptions(){
		return $this->montaJson($this->options);
	}
	
	private function montaJson($outerArr){
		$retorno = "{";
		foreach ($outerArr as $innerArr){
			foreach ($innerArr as $key=>$value){
				if(is_array($value)){
					$retorno .= $key . ": " . $this->montaJson($innerArr).",";
				}
				else{
					$retorno .= $key . ": " . (is_string($value) == true ? "%&".$value."%&" : $value).",";
				}
			}
		}
		$retorno = substr_replace($retorno ,"",-1);
		$retorno .= "}";
		return str_replace('%&', '"', $retorno);
	}
}

?>
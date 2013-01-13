<?php

class Internals_Grafico {
	
	static private $funcoes = array();
	private $nome;
	private $tipo;
	private $dados;
	private $opcoes;
	private $view;
	
	function __construct($nome, $tipo, $dados, $opcoes, $view) {
		$this->view = $view;
		$this->nome = $nome;
		$this->tipo = $tipo;
		$this->dados = $dados;
		$this->opcoes = $opcoes;
		array_push(Internals_Grafico::$funcoes, $nome);
		$this->addFunction();
	}
	
	static function renderGraphics($view){
		$view->headScript ()->prependFile ('https://www.google.com/jsapi', 'text/javascript' );
		$view->inlineScript ()->captureStart ();
			echo "google.load('visualization', '1', {packages:['corechart']});
			google.setOnLoadCallback(drawCharts);";
			echo "function drawCharts() {";
			foreach (Internals_Grafico::$funcoes as $funcao){
				echo "draw" . Internals_Util::cleanString($funcao) . "Function();";
			}
			echo "}";
		$view->inlineScript ()->captureEnd ();
		foreach (Internals_Grafico::$funcoes as $nome){
			echo "<div id='" . Internals_Util::cleanString($nome) . "' style='width: 900px; height: 500px;'></div>";
		}
	}
	
	function addFunction(){
		$this->view->inlineScript ()->captureStart ();
			echo "function draw" . Internals_Util::cleanString($this->nome) . "Function(){
	    	  var data = new google.visualization.DataTable(
	   			   " . $this->dados . "
	   			)
	   			
	          var options = " . $this->opcoes . ";
	
	          var chart = new google.visualization." . $this->tipo . "(document.getElementById('" . Internals_Util::cleanString($this->nome) . "'));
	          chart.draw(data, options);
	      	}";
		$this->view->inlineScript ()->captureEnd ();
	}
	
}

?>
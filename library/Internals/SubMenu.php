<?php

class Internals_SubMenu {

	private static $Has = false;
	
	public static function AddItem($nome, $link, $icone = null){
		$sessao = new Zend_Session_Namespace("Submenu");
		$sessao->listaLinks[$link] = array($nome, $icone);
		Internals_SubMenu::$Has = true;
	}
	
	public static function PrintSubmenu($view){
		$sessao = new Zend_Session_Namespace("Submenu");
		$retorno = "";
		if(isset($sessao->listaLinks)){
			$retorno .= "<div class=\"span3\">".PHP_EOL;
			$retorno .= "<ul class=\"nav nav-list well\">".PHP_EOL;
			foreach($sessao->listaLinks as $link => $interna){
				if($link != null){
					list ($controller, $action) = split ('/', $link);
				}
				$retorno .= "<li class=\"".($link != null && $view->action == $action ? "active" : "")." ".($link == null ? "nav-header" : "")."\">";
				if($link != null){
					$retorno .= "<a href=\"/".$controller."/".($action == "index" ? "" : $action)."\">";
				}
				if($interna[1] != null){
					$retorno .= "<i class=\"icon-home".($view->action == ($action == null ? "index" : $action) ? " icon-white" : "")."> </i>";
				}
				$retorno .= $interna[0];
				$retorno .= "</a>";
				$retorno .= "</li>";
			}
			$retorno .= "</ul>".PHP_EOL;
			$retorno .= "</div>".PHP_EOL;
		}
		echo $retorno;
		unset($sessao->listaLinks);
	}
	
	public static function HasSubMenu(){
		return Internals_SubMenu::$Has;
	}
}

?>
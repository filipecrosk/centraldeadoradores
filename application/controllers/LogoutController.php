<?php

class LogoutController extends Zend_Controller_Action {
	/**
	 * The default action - show the home page
	 */
	public function indexAction() {
		$this->_helper->viewRenderer->setNoRender(true);
		Internals_Auth::Logout();
		Internals_Message::info("Logout realizado com sucesso!");
		$this->_redirect("login");
	}

}

<?php

class AlterarsenhaController extends Internals_Controller_CloseAction {
	
	public function indexAction() {
		$this->_helper->layout()->setLayout("1column");
	}
	
	public function doAction(){
		$this->_helper->layout()->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$senhaAtual = $this->getRequest()->getPost('senhaAtual', null);
		$novaSenha = $this->getRequest()->getPost('novaSenha', null);
		$confirmacao = $this->getRequest()->getPost('confirmacao', null);
		if($novaSenha == $confirmacao){
			if(strlen($novaSenha) >= 8){
				$usuario = UsuarioQuery::create()->filterById($this->userId)->filterBySenha(md5($senhaAtual))->findOne();
				if($usuario != null){
					if(md5($novaSenha) != $usuario->getSenha()){
						$usuario->setSenha(md5($novaSenha));
						$usuario->save();
						Internals_Message::success("Senha alterada com sucesso!");
					} else {
						Internals_Message::error("A nova senha é igual à senha atual!");
					}
				} else {
					Internals_Message::error("A senha digitada não está correta!");
				}
			} else {
				Internals_Message::error("A nova senha precisa ter pelo menos 8 caracteres!");
			}
		} else {
			Internals_Message::error("A nova senha não é igual ao digitado no campo confirmação!");
		}
		$this->_redirect("/alterarsenha");
	}

}

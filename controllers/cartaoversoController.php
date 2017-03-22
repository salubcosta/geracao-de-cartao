<?php

class cartaoversoController extends controller{

	public function index(){
		if(isset($_POST['nome'])){
		        $cartao = new cartao();
				$cartao->setNome($_POST['nome']);
				$cartao->setCargo($_POST['cargo']);
				$cartao->setTelefone($_POST['telefone']);
				$cartao->setWhatsApp($_POST['whatsapp']);
				$cartao->setSkype($_POST['skype']);
				$cartao->setEndereco($_POST['endereco']);
				$cartao->setEmail($_POST['email']);

				if($_POST['tipo'] == "Verso"){
					$cartao->gerarCartaoVerso();
				}else{
					$cartao->gerarCartaoFrenteeVerso();
				}
		 }else{
		 	$this->carregarTemplate('cartaoverso',[]);
		 }
	}
}
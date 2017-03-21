<?php

class cartaoversoController extends controller{

	public function index(){
		if(isset($_POST['nome'])){
		        $cartao = new cartao();
		        $cartao->gerarCartao();
		 }else{
		 	$this->carregarTemplate('cartaoverso',[]);
		 }
	}
}
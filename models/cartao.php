<?php

class cartao{

	private $nome;
	private $cargo;
	private $telefone;
	private $whatsApp;
	private $skype;
	private $endereco;
	private $email;

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}

	public function setCargo($cargo){
		$this->cargo = $cargo;
	}
	public function getCargo(){
		return $this->cargo;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function getTelefone(){
		return $this->telefone;
	}

	public function setWhatsApp($whatsApp){
		$this->whatsapp = $whatsapp;
	}
	public function getWhatsApp(){
		return $this->whatsapp;
	}

	public function setSkype($skype){
		$this->skype = $skype;
	}
	public function getSkype(){
		return $this->skype;
	}
	
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}

	public function gerarCartao(){
	}
}

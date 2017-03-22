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
		$this->whatsApp = $whatsApp;
	}
	public function getWhatsApp(){
		return $this->whatsApp;
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
		header('Content-type: image/png');

		require_once 'environment.php';

		$img = imagecreatefrompng(URL.'/assets/imagens/cartaoverso.PNG');

		imagefill($img, 0, 0, imagecolorallocate($img, 220, 220, 220));

		$font1 = DIRETORIO."/assets/fonts/trebuchetms.ttf";

		$fonteTopo = 26;
		$fontSize1 = 20;

		$color = imagecolorallocate($img, 0,0,0);

		imagettftext($img, $fonteTopo, 0, 50, 90, $color, $font1, $this->getNome());
		imagettftext($img, $fontSize1, 0, 50, 130, $color, $font1, $this->getCargo());
		imagettftext($img, $fontSize1, 0, 105, 205, $color, $font1, $this->getTelefone());
		imagettftext($img, $fontSize1, 0, 350, 200, $color, $font1, $this->getWhatsApp());
		imagettftext($img, $fontSize1, 0, 110, 248, $color, $font1, $this->getSkype());
		imagettftext($img, $fontSize1, 0, 110, 292, $color, $font1, $this->getEndereco());
		imagettftext($img, $fontSize1, 0, 110, 328, $color, $font1, $this->getEmail());

		imagepng($img,DIRETORIO."/assets/imagens/cartaogerado.png");
		imagedestroy($img);
		header('Location: '.URL.'/cartaogerado');
	}

	public function verificarCartaoVerso(){
		return file_exists(DIRETORIO."/assets/imagens/cartaogerado.png");
	}
}

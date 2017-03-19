<?php

class core{

	public function run(){
		$this->processarURL();
	}

	public function processarURL(){
		$params = array();

		if(isset($_GET['url'])){
			$url = filter_var(strtolower(rtrim($_GET['url'])), FILTER_SANITIZE_URL);

			$url = explode('/', $url);

			$controller = $this->isArray($url,0) ? $this->isArray($url,0).'Controller' : 'homeController';
			$action = $this->isArray($url,1) ? $this->isArray($url,1) : 'index';

			if($this->isArray($url,2)){
				unset($url[0]);
				unset($url[1]);
				$params = $url;
			}
		}else{
			$controller = 'homeController';
			$action = 'index';
		}

		if(!$this->isController($controller)){
			echo 'Controlador não existe!'; //invocar 404.php
			exit;
		}

		$_controller = new $controller;

		if(!$this->isAction($_controller, $action)){
			echo 'Método/Action não encontrado!'; //invocar 404.php
			exit;
		}

		call_user_func_array(array($_controller, $action), $params);
	}//fim processarURL()

	public function isArray($array, $key){
		if(isset($array[$key])){
			return $array[$key];
		}
		return false;
	}//fim isArray()

	public function isController($controller){
		return file_exists(DIRETORIO.'/controllers/'.$controller.'.php');
	}// fim isController()

	public function isAction($obj, $method){
		return (method_exists($obj, $method));
	}// fim isAction
}
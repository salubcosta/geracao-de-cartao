<?php

class controller{

	public function carregarTemplate($view, $array){
		include DIRETORIO.'/views/template.php';
	}

	public function carregarView($view, $array){
		extract($array);
		include DIRETORIO.'/views/'.$view.'.php';
	}
}

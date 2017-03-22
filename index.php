<?php
require_once 'config.php';


if(isset($_GET['url'])){
	if($_GET['url'] == 'deleteimg'){
		unlink('assets/imagens/cartaogerado.png');
		header('Location: '.URL.'/home');
	}
}

$core = new core();
$core->run();

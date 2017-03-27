<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Geração de Cartão</title>
	<link href="<?php echo URL; ?>/assets/css/estilo.css" rel="stylesheet">
	<link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/assets/js/bootstrap.min.js" rel="stylesheet">
    <script type="text/javascript" src="<?php echo URL; ?>/assets/js/mascaratelefone.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu embutido</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL; ?>/home">Geração de Cartão</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        		<li><a href="<?php echo URL; ?>/home"><span class="glyphicon glyphicon-home"></span> Início</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerar Cartão <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo URL; ?>/cartaofrente"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Cartão Frente</a></li>
                <li><a href="<?php echo URL; ?>/cartaoverso"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Gerar Cartão Frente-Verso</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
</nav>

<div class="container">
	<div class="pagination-centered">
	  <div class="">
		<?php $this->carregarView($view, $array); ?>	  	
	  </div>
	</div>
</div>
<div class=" ">
  <div class="text-center">
    <p class="text-muted">Desenvolvido por - <a href="http://www.salumao.com.br" target="_blank" class="btn btn-default">Salumao.com.br</a></p>
  </div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
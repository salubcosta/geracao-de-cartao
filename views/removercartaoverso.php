<?php
	$cartao = new cartao();
	$urlRemoverCartaoVerso =  !$cartao->verificarCartaoVerso() ? "'#'"." disabled=\"true\"" : "'".URL."/deleteimg'";
?>
<div class="painel">
	<h3 class="text-danger">Você tem certeza que deseja excluir o cartão?</h3>
	<hr />
	Remover Cartão gerado: <a href=<?php echo $urlRemoverCartaoVerso;?> class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remover Cartão</a>
</div>
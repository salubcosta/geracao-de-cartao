<div class="painel">
	<h4 class="text-info">Olá, seja bem-vindo!</h4>
	<hr />
	<?php
		$cartao = new cartao();
		$urlCartaoVerso =  
			!$cartao->verificarCartaoVerso() ? 
				"'".URL."/home'"." class=\"btn btn-primary disabled\"" 
			: 
				"'".URL."/cartaogerado' class=\"btn btn-primary\"";
		
		$urlRemoverCartaoVerso =  
			!$cartao->verificarCartaoVerso() ? 
				"'".URL."/home'"." class=\"btn btn-danger disabled\"" 
			: 
				"'".URL."/removercartaoverso' class=\"btn btn-danger\"";
	?>
	<p class="text-muted">
		Baixar Cartão-Frente disponível: <a href="<?php echo URL;?>/cartaofrente" class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Cartão-Frente</a>
	</p>
	<p class="text-muted">
		Baixar Último Cartão Gerado: &nbsp;<a href=<?php echo $urlCartaoVerso ;?>><span class="glyphicon glyphicon-download-alt"></span> Baixar Cartão</a>
	</p>
	<hr />
	<p class="text-muted">
		Geração de novo Cartão: <a href="<?php echo URL;?>/cartaoverso" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Geração de Cartão</a>
	</p>
	<hr />
	<p class="text-muted">
		Remover Último Cartão gerado: <a href=<?php echo $urlRemoverCartaoVerso;?>><span class="glyphicon glyphicon-trash"></span> Remover Cartão</a>
	</p>
	
	
</div>
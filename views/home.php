<div class="painel text-center">
	<h3 class="text-info text-center">Olá, seja bem-vindo!</h3>
	<hr />
	<?php
		$cartao = new cartao();
		$urlCartaoVerso =  
			!$cartao->verificarCartaoVerso() ? 
				"'".URL."/home'"." class=\"btn btn-primary btn-lg disabled\"" 
			: 
				"'".URL."/cartaogerado' class=\"btn btn-primary btn-lg\"";
		
		$urlRemoverCartaoVerso =  
			!$cartao->verificarCartaoVerso() ? 
				"'".URL."/home'"." class=\"btn btn-danger btn-lg disabled\"" 
			: 
				"'".URL."/removercartaoverso' class=\"btn btn-danger btn-lg\"";
	?>
	<p class="text-muted">
		Baixar Cartão-Frente disponível:<br /> <a href="<?php echo URL;?>/cartaofrente" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-download-alt"></span> Cartão-Frente</a>
	</p>
	<hr />
	<p class="text-muted">
		Baixar Último Cartão Gerado:<br /><a href=<?php echo $urlCartaoVerso ;?>><span class="glyphicon glyphicon-download-alt"></span> Baixar Cartão</a>
	</p>
	<hr />
	<p class="text-muted">
		Geração de novo Cartão:<br /> <a href="<?php echo URL;?>/cartaoverso" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-plus"></span> Geração de Cartão</a>
	</p>
	<hr />
	<p class="text-muted">
		Remover Último Cartão gerado:<br /> <a href=<?php echo $urlRemoverCartaoVerso;?>><span class="glyphicon glyphicon-trash"></span> Remover Cartão</a>
	</p>
	
	
</div>
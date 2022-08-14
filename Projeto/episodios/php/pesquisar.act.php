<?php
	$texto = $_GET['valor'];
	
	include('connect.php');
	$lista = mysqli_query($con, "Select * from `tb_episodios` where `nome_ep` like '%$texto%'");
	while($linha = mysqli_fetch_array($lista)){
	
		echo "
			<div class=central>
				<p>Código: $linha[codigo]</p>
				<p>Nome do Episódio: $linha[nome_ep]</p>
				<p>Data de Lançamento: $linha[data_de_lancamento]</p>
				<p>Número de downloads: $linha[numero_de_download]</p>
				<p>Visualizações: $linha[visualizacoes]</p>
				<p><a href=alterarEpisodios.php?cod=$linha[codigo]>Alterar</a></p>
				<p><a href=javascript:confirmar($linha[codigo])>Excluir</a></p>
			</div>";	
}




?>
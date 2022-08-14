<?php
$texto = $_GET['valor'];

include('connect.php');
$lista = mysqli_query($con, "Select * from `tb_usuarios` WHERE `Nome` like '%$texto%'");
while($linha = mysqli_fetch_array($lista)){
	echo "
		<div class=box>
			<p>Código: $linha[codigo]</p>
			<p>Nome: $linha[Nome]</p>
			<p>Login: $linha[login]</p>
			<p>Nível: $linha[nivel]</p>
			<p><img src=$linha[ft_usuario] class=foto_box ></p>
			<p><a href=alterar.php?cod=$linha[codigo]>Alterar</a></p>
			<p><a href=javascript:confirmar($linha[codigo])>Excluir</a></p>
		</div>
	
	";	
}
?>
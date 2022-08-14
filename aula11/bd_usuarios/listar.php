<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar</title>
<style>
.box{
	width:300px;
	float:left;
	border:double 6px #0033CC;
	color:#039;
	background-color:#A7DDEF;	
	height:350px;
	margin:20px;
}
.foto_box{
	width:180px;
	margin:10px;	
}


</style>


</head>
<body>
<?php
include('connect.php');
$lista = mysqli_query($con, "Select * from `tb_usuarios`");
while($linha = mysqli_fetch_array($lista)){
	echo "
		<div class=box>
			<p>Código: $linha[codigo]</p>
			<p>Nome: $linha[Nome]</p>
			<p>Login: $linha[login]</p>
			<p>Nível: $linha[nivel]</p>
			<p><img src=$linha[ft_usuario] class=foto_box ></p>
			<p><a href=alterar.php?cod=$linha[codigo]>Alterar</a></p>
		</div>
	
	";	
}

?>

</body>
</html>
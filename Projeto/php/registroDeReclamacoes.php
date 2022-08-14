<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/estiloPHP.css" />
<title>Registros de Reclamações</title>
<link rel="shortcut icon" href="../imgs/icone_home.ico"/>

</head>
<body>
<?php
include('connect.php');
$lista = mysqli_query($con, "Select * from `tb_reclamacoes`");
while($linha = mysqli_fetch_array($lista)){
	echo "
		<div class=central>
			<p>Código: $linha[codigo]</p>
			<p>Nome: $linha[nome_pessoa]</p>
			<p>E-mail: $linha[email]</p>
			<p>Opcão: $linha[opcao]</p>
			<p>Mensagem: $linha[mensagem]</p>
		</div>
	
	";	
}

?>

</body>
</html>
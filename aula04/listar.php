<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Veículos</title>
<style>
	.box{
	margin:20px;
	padding:20px;
	border: double 5px black;	
	float:left;
	width:150px;
	height:120px;
    		
	}
	.box:hover{
		border: double 5px #FF3399;		
		
	}

</style>
</head>

<body>
<?php
include('connect.php');
$lista = mysql_query("Select * from `tb_veiculos`");

while($linha = mysql_fetch_array($lista)){
	echo "<div class=box>";
	echo "Código: $linha[codigo]<br>";
	echo "Montadora: $linha[montadora]<br>";
	echo "Modelo: $linha[modelo]<br>";
	echo "Cor: $linha[cor]<br>";
	echo "Ano: $linha[ano]<br>";
	echo "</div>";	
	
}


?>
</body>
</html>
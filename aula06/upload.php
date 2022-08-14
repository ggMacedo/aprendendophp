<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload de imagem</title>

</head>
<style>
.sujeito{
	float:left;
	margin:5px;
	opacity:0.5;	
}
.sujeito:hover{
	transition:0.8;
	opacity:10;	
}
.nome_sujeito{
	height:20px;
	width:130px;
	margin-left:50px;	
	border:double #000000; 
	text-align:center;
	
}
.img_sujeito{
	height:200px;
	width:250px;
	border:double #000000;
}

</style>



<body>
<form method="POST" enctype="multipart/form-data">
Nome:<input type="text" name="nome" /><br />
Foto:<input type="file" name="foto" /><br />
<input type="submit" name="bt-enviar" value="Enviar" /><br />
</form>

<?php
include('connect.php');

if(isset($_POST['bt-enviar'])){
	$nome = $_POST['nome'];
	$foto = $_FILES['foto'];
	$novo_nome = "imgs/".md5(time().$foto['name']).".jpg";
	
	if(move_uploaded_file($foto['tmp_name'],$novo_nome)){
		mysqli_query($con,"INSERT INTO `bd_imagens`.`tb_imagens` (`codigo`, `nome`, `foto`) VALUES (NULL, '$nome', '$novo_nome');");		
	}
}

$sujeito = mysqli_query($con,"Select * from `tb_imagens`");

while($imagem = mysqli_fetch_array($sujeito)){
	echo "<div class=sujeito>
			<p class= nome_sujeito>$imagem[nome]</p>
			<img src=$imagem[foto] class = img_sujeito>
		</div>";	
}

?>
</body>
</html>
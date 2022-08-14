<?php
include('connect.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$confirsenha = $_POST['senha2'];
$nivel = $_POST['nivel'];
$foto = $_FILES['foto'];
$novo_nome = "fotosUsuario/".md5(time().$foto['name']).".jpg";
if(move_uploaded_file($foto['tmp_name'],$novo_nome)){
	if($senha == $confirsenha){
		$senha = md5($senha);	
		mysqli_query($con,"INSERT INTO `bd_usuarios`.`tb_usuarios` (`codigo`, `nome`, `login`, `senha`, `nivel`, `fotoUsuario`) 
						   VALUES (NULL, '$nome', '$login', '$senha', '$nivel', '$novo_nome');");
	}
}
header("localhost:incluir.php");


?>

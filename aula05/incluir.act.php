<?php
include('connect.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$confirsenha = $_POST['senha2'];
$nivel = $_POST['nivel'];

if($senha == $confirsenha){
	$senha = md5($senha);	
	mysqli_query($con,"INSERT INTO `bd_usuarios`.`tb_usuarios` (`codigo`, `nome`, `login`, `senha`, `nivel`) 
					   VALUES (NULL, '$nome', '$login', '$senha', '$nivel');");
}
header("localhost:incluir.php");


?>

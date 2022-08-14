<?php
session_start();
include('connect.php');
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$busca = mysqli_query($con,"Select * from `tb_usuarios` where
 					`login` like '$login'");
$usuario = mysqli_fetch_array($busca);
if($usuario['login'] == $login && $usuario['senha'] = $senha){
	$_SESSION['usuario'] = $usuario['Nome'];
	$_SESSION['login'] = true;
}else{
	session_destroy();
}
header("location:listar.php");






?>
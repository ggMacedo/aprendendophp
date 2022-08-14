<?php
$codigo = $_GET['codigo'];
include('connect.php');
$busca = mysqli_query($con,"Select * from `tb_usuarios` where `codigo` = '$codigo'");
$usuario = mysqli_fetch_array($busca);
unset($usuario['ft_usuario']);
mysqli_query($con, "Delete from `tb_usuarios` where `codigo` = '$codigo'");
//header('location:pesquisar.php');

?>
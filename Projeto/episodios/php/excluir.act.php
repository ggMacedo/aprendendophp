<?php
	$codigo = $_GET['codigo'];
	include('connect.php');
	$busca = mysqli_query($con,"Select * from `tb_episodios` where `codigo` = '$codigo'");
	$usuario = mysqli_fetch_array($busca);
	mysqli_query($con, "Delete from `tb_episodios` where `codigo` = '$codigo'");
	//header('location:pesquisar.php');

?>
<?php
include('connect.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$opcao1 = $_POST['opcao'];
$mensagem = $_POST['mensagem'];


if(mysqli_query($con,"INSERT INTO `bd_suporte`.`tb_reclamacoes`
				   (`codigo`, `nome_pessoa`, `email`, `opcao`, `mensagem`) 
			VALUES (NULL, '$nome', '$email', '$opcao1', '$mensagem');")){
				//ação
				
				header("location:../suporte.html");
	}


?>


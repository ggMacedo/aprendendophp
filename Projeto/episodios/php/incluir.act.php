<?php
include('connect.php');
$nome = $_POST['nome'];
$dataLancamento = $_POST['data'];


if(mysqli_query($con,"INSERT INTO `bd_animes`.`tb_episodios`
		(`codigo`, `nome_ep`, `data_de_lancamento`) VALUES
		(NULL, '$nome', '$dataLancamento');")){
			
			header("location:cadastrarEpisodios.php");

		}
	
?>


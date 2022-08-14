<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/estiloPHP.css" />
<title>Alterar Episódio</title>
<link rel="shortcut icon" href="../../imgs/icone_home.ico"/>
</head>
<body>

<?php
	include('connect.php');
	$codigo = $_GET['cod'];
	$busca = mysqli_query($con, "Select * from `tb_episodios` where `codigo` = '$codigo'");
	$episodio = mysqli_fetch_array($busca);
?>

<div class="central">
    <div class="titulo"><h1>Alterar Episódios</h1></div>

    <div class="formulario">
		<form method="post" enctype="multipart/form-data">

			<div class="textos">
				Nome do Episódio:<input type="text" name="nome" value="<?php echo $episodio['nome_ep']?>" /><br />
			</div>

			<div class="textos">
				 Data de lançamento:<input type="date" name="data" value="<?php echo $episodio['data_de_lancamento'] ?>" /><br />
			</div>

			<button type="submit" name="bt-enviar" value="Enviar" />Enviar</button><br />

		</form>
    </div>
</div>

<?php
	if(isset($_POST['bt-enviar'])){
		$nome = $_POST['nome'];
		$dataLancamento = $_POST['data'];
		mysqli_query($con,"UPDATE `tb_episodios` SET 
		`nome_ep` = '$nome', 
		`data_de_lancamento` = '$dataLancamento'
		WHERE `tb_episodios`.`codigo` = '$codigo';");
		header("location:registroDeEpisodios.php");	
		
	}
?>

</body>
</html>
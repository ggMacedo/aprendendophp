<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>

<?php
	include('connect.php');
	$codigo = $_GET['cod'];
	$busca = mysqli_query($con, "Select * from `tb_usuarios` where `codigo` = '$codigo'");
	$usuario = mysqli_fetch_array($busca);
?>

<form method="post" enctype="multipart/form-data">
    Nome:<input type="text" name="nome" value="<?php echo $usuario['Nome']?>" /><br />
    Login:<input type="text" name="login" value="<?php echo $usuario['login'] ?>" /><br />
    Nível:<input type="number" name="nivel" value="<?php echo $usuario['nivel']?>" /><br />
    <label for="campo_foto">Foto:</label><input type="file" name="input_foto" id="campo_foto" /><br />
    <input type="submit" value="Enviar" name= "bt-enviar" /><br />
</form>

<?php
	if(isset($_POST['bt-enviar'])){
		echo $nome = $_POST['nome'];
		$login = $_POST['login'];
		$nivel = $_POST['nivel'];
		mysqli_query($con,"UPDATE `tb_usuarios` SET 
		`Nome` = '$nome', 
		`login` = '$login', 
		`nivel` = '$nivel'
		WHERE `tb_usuarios`.`codigo` = '$codigo';");
		header("location:listar.php");	
		
	}
?>

</body>
</html>
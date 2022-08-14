<?php
include('connect.php');
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$nivel = $_POST['nivel'];
$dados_foto = $_FILES['input_foto'];
$foto_salvar = "fotos/".md5(time().$dados_foto['size']).".jpg";

if(move_uploaded_file($dados_foto['tmp_name'],$foto_salvar)){
	if($senha === $senha2){
		$senha = md5($senha);
		mysqli_query($con,"INSERT INTO `bd_usuarios`.`tb_usuarios`
			(`codigo`, `Nome`, `login`, `senha`, `nivel`,`ft_usuario`) VALUES
			(NULL, '$nome', '$login', '$senha', '$nivel','$foto_salvar');");
	}
}
header("location:incluir.php");


?>


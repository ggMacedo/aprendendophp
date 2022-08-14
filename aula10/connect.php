<?php

if(!$con = mysqli_connect("localhost",'root','')){
	echo "Erro ao se conectar ao banco de dados!";
}
if(!mysqli_select_db($con,'bd_usuarios')){
	echo "Erro ao selecionar a base de dados";
}

mysqli_query($con,"SET NAMES utf8");


?>
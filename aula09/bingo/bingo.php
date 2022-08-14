<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bingo bolas mágicas</title>
</head>
<form method="post">
<input type="submit" value="Sortear" name="bt-sortear" />
<input type="submit" value="Limpar" name="bt-limpar" />
</form>
<body>
<?php

session_start();
if(!isset($_SESSION['numeros'])){
	$_SESSION['numeros'] = array();	
}

//LIMPAR VETOR
if(isset($_POST['bt-limpar'])){
	$_SESSION['numeros'] = array();	
}

if(isset($_POST['bt-sortear'])){
	
		if($_SESSION['numeros'] == 75)
			echo "gerente";
		else{
			do{
				$sorteado = rand(1,75);
			}while(in_array($sorteado, $_SESSION['numeros']));
			
			$_SESSION['numeros'][$sorteado] = $sorteado;
		}
		
}

sort($_SESSION['numeros']);


foreach($_SESSION['numeros'] as $num){
	echo "$num - ";		
}		
?>
</body>
</html>
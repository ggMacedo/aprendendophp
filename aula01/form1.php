<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="post" enctype="multipart/form-data">
Nome <input type="text" name ="nome" /> <br/>
Nascto <input type = "date" name="nscto" /> <br/>
Bairro <input type ="text" name="bairro" /> <br/>
Estado civil 
<select name ="estado_civil">
    <option value ="Casado"> Casado </option>
    <option value ="Solteiro"> Solteiro </option>
    <option value ="Perdido"> Caso perdido </option>
</select>
<input type = "submit" value="Enviar" name = "bt-enviar" />
</form>

<?php
if(isset($_POST['bt-enviar'])){
    echo $nome = $_POST['nome']."<br>";
	echo $nscto = $_POST['nscto'];
	$data = explode('-' ,$nscto);
	//print_r($data);
	$data = array_reverse($data);
	//print_r($data);
	$data=implode('/',$data);
	echo "<br>" . $data . "<br>" ;
	echo $bairro = $_POST['bairro']."<br>";
	echo $estado_civil = $_POST['estado_civil']."<br>";
}
?>


</body>
</html>
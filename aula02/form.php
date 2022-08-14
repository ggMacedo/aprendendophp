<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method = "post" enctype="multipart/form-data">
Qual tabuada deseja ver?
	<select name="valor">
    	<?php
			for($x = 1; $x<11;$x++){
				echo"<option value=$x>$x</option>";
				
			}
		?>
        </select>
<input type="submit" value="Enviar" name="bt-enviar"/>
</form>
<?php
//Operador E && e o operador OU ||

if (isset($_POST['bt-enviar']))
{
	$valor=$_POST['valor'];
	echo"Exibindo a tabuada do $valor : <br>";
	for($x = 1; $x<11;$x++)
	{
		$result = $valor * $x;
		echo"$valor X $x = $result  <br>";
	}
}
?>
</body>
</html>
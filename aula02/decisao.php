<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method = "post" enctype="multipart/form-data">
Digite sua idade:<input type="text" name="age" /> <br/>
<input type="submit" value="Enviar" name="bt-enviar"/>
</form>
<?php
if (isset($_POST['bt-enviar'])){
	$idade=$_POST['age'];
	echo"A idade digitada é $idade";
}
?>
</body>
</html>
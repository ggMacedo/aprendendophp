<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Incluir Usuário</title>
<style>
#campo_foto{
	visibility:hidden;
}
label{
	border:solid 4px #0099CC;
	box-shadow:5px 5px 5px #999999;
	margin:20px;
}
</style>
</head><body>
<form method="post" enctype="multipart/form-data" action="incluir.act.php">
Nome:<input type="text" name="nome" /><br />
Login:<input type="text" name="login" /><br />
Senha:<input type="password" name="senha" /><br />
Confirmar Senha:<input type="password" name="senha2" /><br />
Nível:<input type="number" name="nivel" /><br />
<label for="campo_foto">Foto</label><input type="file" name="input_foto" id="campo_foto" /><br />
<input type="submit" value="Enviar"  /><br />
</form>




</body>
</html>
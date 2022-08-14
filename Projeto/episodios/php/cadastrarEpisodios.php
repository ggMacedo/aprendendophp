<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/estiloPHP.css" />
<title>Cadastro de Eps</title>
<link rel="shortcut icon" href="../../imgs/icone_home.ico"/>
</head>
<body>

<div class="central">
    <div class="titulo"><h1>Cadastrar Episódios</h1></div>

    <div class="formulario">
		<form method="post" enctype="multipart/form-data" action="incluir.act.php">

			<div class="textos">
				Nome do Episódio:<input type="text" name="nome" placeholder="Digite o nome do épisódio."/><br />
			</div>

			<div class="textos">
				Data de lançamento:<input type="date" name="data" /><br />
			</div>

			<button type="submit" name="bt-enviar" value="Enviar" />Enviar</button><br />

		</form>
    </div>
</div>





</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/estiloPHP.css" />
<title>Registro de Episódios</title>
<link rel="shortcut icon" href="../../imgs/icone_home.ico"/>
<script src="../../jquery/jquery-3.3.1.min.js"></script>
<script>
	function pesquisar(texto){
		$.ajax({
			url:'pesquisar.act.php?valor=' + texto,
			success: function(retorno){
				$('#retorno').html(retorno);	
			}
		});
	}
	
	function confirmar(cod){
		resp = confirm("Deseja excluir o registro " +cod+"?");
		if (resp == true){
			$.ajax({
			url:'excluir.act.php?codigo='+cod,
			success:function(retorno){
				$('#retorno').html(alert("Registro excluído!"));
			}
		});	
		}
	}
</script>

</head>
<body>
<div class="central">
    <div class="titulo"><h1>Registro de Episódios</h1></div>
    <div class="formulario">
        <form method="post">
            <div class="textos">
                Pesquisar:<input type="text" id="txt_pesquisar" onkeyup="pesquisar(this.value)" placeholder="Escreva o nome do episódio."/>
            </div>
        </form>
	</div>
</div>

<div id="retorno"></div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pesquisar</title>
<style>
.box{
	width:300px;
	float:left;
	border:double 6px #0033CC;
	color:#039;
	background-color:#A7DDEF;	
	height:350px;
	margin:20px;
}
.foto_box{
	width:180px;
	margin:10px;	
}


</style>
<script src="jquery-1.8.1.min.js"></script>
<script>
function pesquisar(texto){
	$.ajax({
		url:'pesquisar.act.php?valor='+texto,
		success:function(retorno){
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
			$('#retorno').html("Registro excluído!!!!!!!!");
		}
	});	
	}
	
	
}
</script>
</head>
<body>
<form method="post">
Pesquisar:<input type="text" id="txt_pesquisar" onkeyup="pesquisar(this.value)"/>
</form>

<div id="retorno"></div>

</body>
</html>
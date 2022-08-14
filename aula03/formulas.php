<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulas</title>
<style>
	.box{
	margin:15px;
	padding:10px;
	border: double 5px black;	
		
	}

</style>
</head>

<body>
<div class="box">
<form method="post" enctype="multipart/form-data">
1- Calcular a área do retângulo: <br />
<br />Digite as dimensões do retângulo<br />
Lado A:<input type="text" name="ladoA" /><br />
Lado B:<input type="text" name="ladoB" /><br />
<input type="submit" name="c_area_retangulo" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['ladoA'])){
	$ladoA = $_POST['ladoA'];	
	$ladoB = $_POST['ladoB'];
	if($ladoA > 0 && $ladoB > 0){
		$area = $ladoA * $ladoB;
		echo "A área do retângulo é de: $area";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
<div class="box">
<form method="post" enctype="multipart/form-data">
2- Calcular o volume de uma esfera: <br />
<br />Digite as dimensões da esfera<br />
Digite o raio:<input type="text" name="raio" /><br />
<input type="submit" name="volume_esfera" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['raio'])){
	$raio = $_POST['raio'];
		if($raio > 0){	
		$volume = (4 * 3.14 * ($raio * $raio * $raio)) / 3 ;
		echo "O volume da esfera é de: $volume";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
<div class="box">
<form method="post" enctype="multipart/form-data">
3- Calcular o volume de um paralelepípido: <br />
<br />Digite as dimensões do paralelepípido<br />
Digite o comprimento:<input type="text" name="comprimento" /><br />
Digite a largura:<input type="text" name="largura" /><br />
Digite a altura:<input type="text" name="altura" /><br />
<input type="submit" name="volume_esfera" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['comprimento'])){
	$comprimento = $_POST['comprimento'];
	$largura = $_POST['largura'];
	$altura = $_POST['altura'];	
		if($comprimento > 0 && $largura > 0 && $altura > 0){
		$volume_pa = $comprimento * $largura * $altura;
		echo "O volume do paralelepípido é de: $volume_pa";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
<div class="box">
<form method="post" enctype="multipart/form-data">
4- Calcular a área de uma esfera: <br />
<br />Digite as dimensões da esfera<br />
Digite o raio:<input type="text" name="raio_e" /><br />
<input type="submit" name="area_esfera" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['raio_e'])){
	$raio_e = $_POST['raio_e'];
		if($raio_e > 0){	
		$area_e = 4 * 3.14 * ($raio_e * $raio_e) ;
		echo "A área da esfera é de: $area_e";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
<div class="box">
<form method="post" enctype="multipart/form-data">
5- Calcular o volume de um cone: <br />
<br />Digite as dimensões do cone<br />
Digite o raio:<input type="text" name="raio_c" /><br />
Digite a altura:<input type="text" name="altura_c" /><br />
<input type="submit" name="volume_cone" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['raio_c'])){
	$raio_c = $_POST['raio_c'];
	$altura_c = $_POST['altura_c'];	
	if($raio_c > 0 && $altura_c > 0){
		$volume_c = (3.14 * ($raio_c * $raio_c) * $altura_c) / 3 ;
		echo "O volume do cone é de: $volume_c";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
<div class="box">
<form method="post" enctype="multipart/form-data">
6- Calcular a área de um cone: <br />
<br />Digite as dimensões do cone<br />
Digite a geratriz:<input type="text" name="geratriz_b" /><br />
Digite o raio:<input type="text" name="raio_b" /><br />
<input type="submit" name="area_cone" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['geratriz_b'])){
	$geratriz_b = $_POST['geratriz_b'];
	$raio_b = $_POST['raio_b'];
		if($geratriz_b > 0 && $raio_b > 0){	
		$area_t = ((3.14 * $raio_b) * ($geratriz_b + $raio_b));
		echo "A área total do cone é de: $area_t";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
<div class="box">
<form method="post" enctype="multipart/form-data">
7- Calcular o perimetro de um retângulo: <br />
<br />Digite as dimensões do retângulo<br />
Digite a base:<input type="text" name="base_r" /><br />
Digite a altura:<input type="text" name="altura_r" /><br />
<input type="submit" name="perimetro_r" value="Calcular" /><br />
</form>

<?php
if(isset($_POST['base_r'])){
	$base_r = $_POST['base_r'];
	$altura_r = $_POST['altura_r'];
	if($base_r > 0 && $altura_r > 0){	
		$perimetro = 2 * ($base_r + $altura_r);
		echo "O perimetro do retângulo é de: $perimetro";
	}else
		echo "Opção inválida <br /> Digite novamente";
}

?>
</div>
</body>
</html>
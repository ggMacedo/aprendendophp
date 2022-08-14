<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabuadas</title>
<style>
	.box{
	float:left;
	margin:20px;
	padding:10px;
	border: double 5px #006666;	
		
	}

</style>
</head>

<body>
<?php
for($x = 1; $x<=10; $x++){
	echo "<div class=box>";
	for($y =1; $y<=10; $y++){
		$resp = $x * $y;
		echo "$x X $y = $resp <br>";
	}
	echo "</div>";
}

?>
</body>
</html>
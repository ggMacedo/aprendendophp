<?php
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['login'] == true){
		
	}
}else{
	header("location:login.php");	
}

?>
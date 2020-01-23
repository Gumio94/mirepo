<?php
	$con = new mysqli('localhost', 'root', '', 'turnero');
	if($con->connect_error){
		die('Error en la conexion: ' . $con->connect_error);
		exit();
	}
?>
<?php 
/*
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
*/

	require_once "conexion.php";
	require_once "metodosCrud.php";

	$obj = new metodos();
	echo json_encode($obj->truncarTabla());
 ?>
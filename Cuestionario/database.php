<?php
//creando conexion
$db_host = 'localhost';
$db_name = 'Cuestionario';
$db_user = 'root';
$db_pass = '';

//creando los objetos de mysqli
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//manejando errores
if($mysqli->connect_error){
	printf("La conexion no se realizo: %s\n", $mysqli->connect_error);
}
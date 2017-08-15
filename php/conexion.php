<?php
 /*creamos una funcion para conectarse a la base de datos*/ 
function conectarse()
{
// guardamos en variables 
	$Servidor="localhost";
	$usuario="root";
	$password="";
	$bd="vacaciones";
	$conectar=new mysqli($Servidor,$usuario,$password,$bd);
	
	return $conectar;
}
$conexion=conectarse();//guardamos la funcion en la variable conexion
 ?>
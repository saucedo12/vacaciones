<?php 

//asigno a variables de php los valorees del formulario de Registro.php
$FechaRep=$_POST["folio_text"];
$empleado=$_POST["folio_text"];
$nombre=$_POST["usuario_text"];
$inicio=$_POST["extension_text"];
$termina=$_POST["departamento_text"];
$regresa=$_POST["problema_text"];
$dias=$_POST["FechaRep_txt"];
$departamento=$_POST["FechaAte_txt"];
$tipo_empledo=$_POST["atendio_text"];
$año=$_POST["obcerbacion_txa"];
$periodo1=$_POST["obcerbacion_txa"];
$periodo2=$_POST["obcerbacion_txa"];

$Estatus=$_POST["estatus_slc"];

//verificamos que no exista previamente el folio en la BD
include("conexion.php");// incluimos el archivo de la conexion

//Guardamos la consulta en una variable
$consulta="SELECT * FROM registro_tbl WHERE Folio='$Folio'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;

//si $num_regs es igual a 0, insertamos los datos en la tabla, si no mandamos un mensaje que diga que el folio no existe

if ($num_regs==0) 
{
	//inserto el reg a la bd
		$consulta="INSERT INTO registro_tbl (`Folio`, `Extension`, `Departamento`, `Problema`, `Usuario`, `Fecha_rep`, `Fecha_ate`, `Atendio`, `Obcervacion`, `Estatus`) VALUES ('$Folio', '$Extension', '$Departamento','$Problema','$Persona_rep','$FechaRep','$FechaAte','$Atendio','$Obcervacion','$Estatus')";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
		$mensaje="Se ha dado de alta el registro con el Folio: <b>$Folio</b>";
	else
		$mensaje="No se pudo dar de alta el registro con el Folio: <b>$Folio</b>";

} else 
{
	$mensaje="No se pudo dar de alta el registro con el Folio: <b>$Folio</b> por que ya existe:/";
}

$conexion->close(); //Cerramos la conexion a la base de datos
    //La función header () Te regresa a cualquier pagina de tu proyecto.
    //Tambien podemos enviar variables a esa pagina
	header("Location: ../php/Tomar-nombre.php?mensaje=$mensaje");





 ?>
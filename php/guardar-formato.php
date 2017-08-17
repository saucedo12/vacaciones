<?php 

//asigno a variables de php los valorees del formulario de Registro.php
$id=0;
$fechaFormato=$_POST["fechaFormato_date"];
$num_emp=$_POST["num_emp_text"];
$nombre=$_POST["nombre_text"];
$departamento=$_POST["departamento_text"];
$tipo_empleado=$_POST["tipo_empleado_select"];
$fecha_inicio=$_POST["del_date"];
$fecha_termina=$_POST["al_date"];
$regresa=$_POST["regresa_date"];
$periodo1=$_POST["periodo_check1"];
$periodo2=$_POST["periodo_check2"];
$quinquenio=$_POST[""];
$Totaldias=$_POST["total-dias_num"];
$restan=0;
$motivo=$_POST["motivo_text"];
$tipo_solicitud=$_POST["tipo-solicitud_radio"];
$Estatus=$_POST["estatus_slc"];

$puesto=$_POST["puesto_text"];







//verificamos que no exista previamente el folio en la BD
include("conexion.php");// incluimos el archivo de la conexion

//Guardamos la consulta en una variable
$consulta="SELECT * FROM rol_vacaciones WHERE id_rolVacaciones='$id'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;

//si $num_regs es igual a 0, insertamos los datos en la tabla, si no mandamos un mensaje que diga que el folio no existe

if ($num_regs==0) 
{
	//inserto el reg a la bd
		$consulta="INSERT INTO `rol_vacaciones`(`id_rolVacaciones`, `fecha_solicitud`, `num_emp`, `nombre`, `departamento`, `tipo_empleado`, `fecha_inicio`, `fecha_termina`, `fecha_regresa`, `periodo1`, `periodo2`, `quinquenio`, `total_dias`, `restan`, `motivo`, `tipo_solicitud`, `estatus`) VALUES (0,'$fechaFormato','$num_emp','$nombre','$departamento','$tipo_empleado','$fecha_inicio','$fecha_termina','$regresa','$periodo1','$periodo2','$quinquenio','$Totaldias', '$restan', '$motivo','$tipo_solicitud','$Estatus')";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
		$mensaje="Se ha dado de alta el registro para, <b>$nombre</b> correctamente";
	else
		$mensaje="No se pudo dar de alta el registro para, <b>$nombre</b>";

} else 
{
	$mensaje="No se pudo dar de alta el registro para, <b>$nombre</b> correctamente por que ya existe:/";
}

$conexion->close(); //Cerramos la conexion a la base de datos
    //La función header () Te regresa a cualquier pagina de tu proyecto.
    //Tambien podemos enviar variables a esa pagina
	header("Location: ../php/formato-vacaciones.php?mensaje=$mensaje");





 ?>
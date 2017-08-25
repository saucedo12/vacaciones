<?php 
//asigno a variables de php los valorees del formulario de nuevos-empleados.php
$num_emp=$_POST["num_emp_num"];
$nombre=$_POST["nombre_text"];
$departamento=$_POST["departamento_text"];
$puesto=$_POST["puesto_text"];
$FechaIngreso=$_POST["fecha_date"];
$sexo=$_POST["sexo_radio"];
$tipo=$_POST["tipo-empleado_select"];


//verificamos que no exista previamente el folio en la BD
include("conexion.php");// incluimos el archivo de la conexion

//Guardamos la consulta en una variable
$consulta="SELECT * FROM empleados WHERE num_emp='$num_emp'";
$ejecutar_consulta=$conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;

//si $num_regs es igual a 0, insertamos los datos en la tabla, si no mandamos un mensaje que diga que el folio no existe

if ($num_regs==0) 
{
	//inserto el reg a la bd
		$consulta="INSERT INTO empleados (`num_emp`, `nombre`, `depto`, `puesto`, `fecha_ing`, `sex`, `tipo_empleado`) VALUES ('$num_emp', '$nombre', '$departamento','$puesto','$FechaIngreso','$sexo','$tipo')";
	$ejecutar_consulta=$conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
		$mensaje="Se ha dado de alta el registro con el empleado con N°: <b>$num_emp</b>";
	else
		$mensaje="No se pudo dar de alta el registro con el empleado con N°: <b>$num_emp</b>";

} else 
{
	$mensaje="No se pudo dar de alta el registro con el empleado con N°: <b>$num_emp</b> por que ya existe:/";
}

$conexion->close(); //Cerramos la conexion a la base de datos
    //La función header () Te regresa a cualquier pagina de tu proyecto.
    //Tambien podemos enviar variables a esa pagina
	header("Location: ../php/nuevos-empleados.php?mensaje=$mensaje");

 ?>
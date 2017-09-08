<?php 

//asigno a variables de php los valorees del formulario de Registro.php
$id=0;
$fechaFormato=$_POST["fechaFormato_hidden"];
$num_emp=$_POST["num_emp_text"];
$nombre=$_POST["nombre_text"];
$departamento=$_POST["departamento_text"];
$tipo_empleado=$_POST["tipo_empleado_select"];
$fecha_inicio=$_POST["del_date"];
$fecha_termina=$_POST["al_date"];
$regresa=$_POST["regresa_date"];

$añoAnt=$_POST["añoAnt_check"];
$añoAct=$_POST["añoAct_check"];

$periodoAnt1=$_POST["periodoAnt_check1"]; //año anterior
$periodoAnt2=$_POST["periodoAnt_check2"]; //año anterior
$perAnt=$periodoAnt1." ". $periodoAnt2;

$periodoAct1=$_POST["periodoAct_check1"]; //año actual
$periodoAct2=$_POST["periodoAct_check2"]; //año actual
$perAct=$periodoAct1." ". $periodoAct2;

$periodo3=$añoAnt." ". $perAnt ." ". $añoAct." ". $perAct;
$quinquenio=$_POST["quinquenio_num"];
$Totaldias=$_POST["total-dias_num"];
$restan=0;
$motivo=$_POST["motivo_text"];
$tipo_solicitud=$_POST["tipo-solicitud_radio"];
$Estatus="Enviado";

$jefeAdtvo=$_POST["jefeDepto"];
$subDirector=$_POST["subDirector"];
$jefeInmediato=$_POST["jefeInmediato"];





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
		$consulta="INSERT INTO `rol_vacaciones`(`id_rolVacaciones`, `fecha_solicitud`, `num_emp`, `nombre`, `departamento`, `tipo_empleado`, `fecha_inicio`, `fecha_termina`, `fecha_regresa`, `anio`, `periodo`, `quinquenio`, `total_dias`, `restan`, `motivo`, `tipo_solicitud`, `estatus`,`jefeAdtvo`,`subDirector`,`jefeInmediato`) VALUES (0,'$fechaFormato','$num_emp','$nombre','$departamento','$tipo_empleado','$fecha_inicio','$fecha_termina','$regresa','$añoAct','$periodo3','$quinquenio','$Totaldias', '$restan', '$motivo','$tipo_solicitud','$Estatus','$jefeAdtvo','$subDirector','$jefeInmediato')";
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
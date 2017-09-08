<!-- para crear pdf -->
<?php ob_start();
error_reporting(E_ALL ^ E_NOTICE);
$id=$_GET["id"];





$mysqli=new mysqli("localhost","root","","vacaciones");
$Rol="SELECT * FROM rol_vacaciones WHERE id_rolVacaciones='$id' ";
$consulta4 = $mysqli->query($Rol);
$registro4=$consulta4->fetch_assoc();
$numEmpleado=$registro4["num_emp"];

$BEmpleado = "SELECT * FROM empleados WHERE num_emp='$numEmpleado' ";




$consulta = $mysqli->query($BEmpleado);
$consulta2 = $mysqli->query($BEmpleado);
$consulta3 = $mysqli->query($BEmpleado);

$registro=$consulta->fetch_assoc();
$registro2=$consulta2->fetch_assoc();
$registro3=$consulta3->fetch_assoc();

$num_regs=$consulta->num_rows;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Print</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="../css/app.css">

     <STYLE type="text/css">
   .contenedor 
   {
    
    border: solid black 1px;
    

   }

   body{
    font-size: 1em;/*tamaño de la fuente*/
   }

   img{
    width: 200px;
    text-align: left;
   }

 </STYLE>
    <!-- <link rel="stylesheet" href="../css/estilos.css"  />  Importamos la hoja de estilos -->
</head>
<body>
    <!-- papelata 1 -->
    <div class="contenedor">
    <div class="row expanded">
        <div class="columns medium-2">
            <img  src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        </div>
        <div class="columns medium-2">
            <span> Solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Tipo de empleado: <b><?php echo utf8_decode($registro4["tipo_empleado"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Goce de sueldo: <b>Si</b> </span>
        </div> 

        <div class="columns medium-2">
            <span> Fecha: <b><?php echo utf8_decode($registro4["fecha_solicitud"]); ?></b> </span>

        </div> 
    </div>
    <hr>
    <div class="row expanded">
        <div class="columns medium-1">
            <span> N°: <b><?php echo utf8_decode($registro["num_emp"]); ?></b> </span>  
        </div>
        <div class="columns medium-4">
            <span> <b>Nombre:</b> <br><?php echo utf8_decode($registro["nombre"]); ?> </span>  
        </div>
        <div class="columns medium-4">
            <span> <b>Depto:</b> <br><?php echo utf8_decode($registro["depto"]); ?> </span>  
        </div>
        <div class="columns medium-3">
            <span> <b>Puesto:</b> <br><?php echo utf8_decode($registro["puesto"]); ?> </span>  
        </div>
        
    </div>
    <hr>
    <div class="row expanded">
        <div class="columns medium-2">
               <h6>Periodo de vacaciones:</h6> 
        </div>
        <div class="columns medium-2">
                <span><?php echo utf8_decode($registro4["periodo"]); ?></span>
        </div>
        <div class="columns medium-7">
                <span class="label">Motivo del permiso: </span>
                <span><?php echo utf8_decode($registro4["motivo"]); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
            <span>A partir de: <?php echo utf8_decode($registro4["fecha_inicio"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Hasta: <?php echo utf8_decode($registro4["fecha_termina"]); ?></span>
        </div>
        <div class="columns medium-3">
            <!-- <input type="date" value="<?php echo utf8_decode($registro4["fecha_regresa"]); ?>"> -->
            <span>Regresa: <?php echo utf8_decode($registro4["fecha_regresa"]); ?></span>
        </div>
        <div class="columns medium-3">
           <span>Total de dias: <?php echo utf8_decode($registro4["total_dias"]); ?></span> 
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="columns medium-12 text-center">
            <h6 class="pequeño ">*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h6>
        </div>
    </div> <br><br>
    <div class="row expanded">
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["jefeAdtvo"]); ?></u> </span><br>
            <h6>Jefe de Depto. de servicios administrativos</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["subDirector"]); ?></u> </span><br>
            <h6>Sub-Director</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["jefeInmediato"]); ?></u> </span><br>
            <h6>Jefe inmediato</h6>
        </div>
    </div>     
    </div>

    <!-- papeleta 2 -->
    <div class="contenedor">
    <div class="row expanded">
        <div class="columns medium-2">
            <img  src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        </div>
        <div class="columns medium-2">
            <span> Solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Tipo de empleado: <b><?php echo utf8_decode($registro4["tipo_empleado"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Goce de sueldo: <b>Si</b> </span>
        </div> 

        <div class="columns medium-2">
            <span> Fecha: <b><?php echo utf8_decode($registro4["fecha_solicitud"]); ?></b> </span>

        </div> 
    </div>
    <hr>
    <div class="row expanded">
        <div class="columns medium-1">
            <span> N°: <b><?php echo utf8_decode($registro["num_emp"]); ?></b> </span>  
        </div>
        <div class="columns medium-4">
            <span> <b>Nombre:</b> <br><?php echo utf8_decode($registro["nombre"]); ?> </span>  
        </div>
        <div class="columns medium-4">
            <span> <b>Depto:</b> <br><?php echo utf8_decode($registro["depto"]); ?> </span>  
        </div>
        <div class="columns medium-3">
            <span> <b>Puesto:</b> <br><?php echo utf8_decode($registro["puesto"]); ?> </span>  
        </div>
        
    </div>
    <hr>
    <div class="row expanded">
        <div class="columns medium-2">
               <h6>Periodo de vacaciones:</h6> 
        </div>
        <div class="columns medium-2">
                <span><?php echo utf8_decode($registro4["periodo"]); ?></span>
        </div>
        <div class="columns medium-7">
                <span class="label">Motivo del permiso: </span>
                <span><?php echo utf8_decode($registro4["motivo"]); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
            <span>A partir de: <?php echo utf8_decode($registro4["fecha_inicio"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Hasta: <?php echo utf8_decode($registro4["fecha_termina"]); ?></span>
        </div>
        <div class="columns medium-3">
            <!-- <input type="date" value="<?php echo utf8_decode($registro4["fecha_regresa"]); ?>"> -->
            <span>Regresa: <?php echo utf8_decode($registro4["fecha_regresa"]); ?></span>
        </div>
        <div class="columns medium-3">
           <span>Total de dias: <?php echo utf8_decode($registro4["total_dias"]); ?></span> 
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="columns medium-12 text-center">
            <h6 class="pequeño">*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h6>
        </div>
    </div> <br><br>
    <div class="row expanded">
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["jefeAdtvo"]); ?></u> </span><br>
            <h6>Jefe de Depto. de servicios administrativos</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["subDirector"]); ?></u> </span><br>
            <h6>Sub-Director</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["jefeInmediato"]); ?></u> </span><br>
            <h6>Jefe inmediato</h6>
        </div>
    </div>     
    </div>
<!-- papeleta 3 -->
    <div class="contenedor">
    <div class="row expanded">
        <div class="columns medium-2">
            <img  src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        </div>
        <div class="columns medium-2">
            <span> Solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Tipo de empleado: <b><?php echo utf8_decode($registro4["tipo_empleado"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Goce de sueldo: <b>Si</b> </span>
        </div> 

        <div class="columns medium-2">
            <span> Fecha: <b><?php echo utf8_decode($registro4["fecha_solicitud"]); ?></b> </span>

        </div> 
    </div>
    <hr>
    <div class="row expanded">
        <div class="columns medium-1">
            <span> N°: <b><?php echo utf8_decode($registro["num_emp"]); ?></b> </span>  
        </div>
        <div class="columns medium-4">
            <span> <b>Nombre:</b> <br><?php echo utf8_decode($registro["nombre"]); ?> </span>  
        </div>
        <div class="columns medium-4">
            <span> <b>Depto:</b> <br><?php echo utf8_decode($registro["depto"]); ?> </span>  
        </div>
        <div class="columns medium-3">
            <span> <b>Puesto:</b> <br><?php echo utf8_decode($registro["puesto"]); ?> </span>  
        </div>
        
    </div>
    <hr>
    <div class="row expanded">
        <div class="columns medium-2">
               <h6>Periodo de vacaciones:</h6> 
        </div>
        <div class="columns medium-2">
                <span><?php echo utf8_decode($registro4["periodo"]); ?></span>
        </div>
        <div class="columns medium-7">
                <span class="label">Motivo del permiso: </span>
                <span><?php echo utf8_decode($registro4["motivo"]); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
            <span>A partir de: <?php echo utf8_decode($registro4["fecha_inicio"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Hasta: <?php echo ($registro4["fecha_termina"]); ?></span>
        </div>
        <div class="columns medium-3">
            
            <span>Regresa: <?php echo utf8_decode($registro4["fecha_regresa"]); ?></span>
        </div>
        <div class="columns medium-3">
           <span>Total de dias: <?php echo utf8_decode($registro4["total_dias"]); ?></span> 
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="columns medium-12 text-center">
            <h6 class="pequeño">*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h6>
        </div>
    </div> <br><br>
    <div class="row expanded">
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["jefeAdtvo"]); ?></u> </span><br>
            <h6>Jefe de Depto. de servicios administrativos</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["subDirector"]); ?></u> </span><br>
            <h6>Sub-Director</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo utf8_decode($registro4["jefeInmediato"]); ?></u> </span><br>
            <h6>Jefe inmediato</h6>
        </div>
    </div>     
    </div>

<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| javascript |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
<script>
window.onload = function() {
 window.print();
};  

</script>
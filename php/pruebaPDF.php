<!-- para crear pdf -->
<?php ob_start();
error_reporting(E_ALL ^ E_NOTICE);
$id=$_GET["id"];
$numEmpleado=$_GET["num_emp"];
$op=$_GET["jefeDepto2"];
$mysqli=new mysqli("localhost","root","","vacaciones");
$NewPdf = "SELECT * FROM empleados WHERE id_empleado='$numEmpleado' ";
$Rol="SELECT * FROM rol_vacaciones WHERE id_rolVacaciones='$id' ";
$consulta4 = $mysqli->query($Rol);
$registro4=$consulta4->fetch_assoc();


$consulta = $mysqli->query($NewPdf);
$consulta2 = $mysqli->query($NewPdf);
$consulta3 = $mysqli->query($NewPdf);
$num_regs=$consulta->num_rows;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>pdf prueba</title>
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
        <div class="columns medium-3">
            <span> Tipo de solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
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
    <div class="row">
        <div class="columns medium-12 text-center">
            <h7>*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h7>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="columns medium-12">
            <form  id="consulta" name="consulta_form" method="get">

                 <table>
                <thead>
                    <tr>
                        <th>N° Empleado</th>
                        <th>Nombre</th>
                        <th>Departamento</th>
                        <th>puesto</th>
                    </tr>   
                </thead>

                <tbody>
                    <?php 

                        while ($registro=$consulta->fetch_assoc()) 
                            {
                    ?>
                            <tr>
                                <td><?php echo utf8_decode($registro["num_emp"]); ?></td>
                                <td><?php echo utf8_decode($registro["nombre"]); ?></td>
                                <td><?php echo utf8_decode($registro["depto"]); ?></td>
                                <td><?php echo utf8_decode($registro["puesto"]); ?></td>
                            </tr> 
                            

                    <?php 

                            }
                     ?>

                </tbody>
            </table>

        </form><br>
        <hr>        
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
               <h7>Periodo de vacaciones:</h7> 
        </div>
        <div class="columns medium-2">
                <span class="label"><?php echo utf8_decode($registro4["periodo"]); ?></span>
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
            <span>Hasta: <?php echo utf8_decode(date($registro4["fecha_termina"])) ; ?></span>
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
    <div class="row expanded">
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Jefe de Depto. de servicios administrativos</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Sub-Director</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Jefe inmediato</h6>
        </div>
    </div> <br>       
    </div>

    <!-- papeleta 2 -->
    <div class="contenedor">
    <div class="row expanded">
        <div class="columns medium-2">
            <img  src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        </div>
        <div class="columns medium-3">
            <span> Tipo de solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
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
    <div class="row">
        <div class="columns medium-12 text-center">
            <h7>*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h7>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="columns medium-12">
            <form  id="consulta" name="consulta_form" method="get">

                 <table>
                <thead>
                    <tr>
                        <th>N° Empleado</th>
                        <th>Nombre</th>
                        <th>Dependencia</th>
                        <th>Departamento</th>
                        <th>puesto</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php 

                        while ($registro2=$consulta2->fetch_assoc()) 
                            {
                    ?>
                            <tr>
                                <td><?php echo utf8_decode($registro2["num_emp"]); ?></td>
                                <td><?php echo utf8_decode($registro2["nombre"]); ?></td>
                                <td>Obras</td>
                                <td><?php echo utf8_decode($registro2["depto"]); ?></td>
                                <td><?php echo utf8_decode($registro2["puesto"]); ?></td>
                            </tr> 
                            

                    <?php 

                            }
                     ?>

                </tbody>
            </table>

        </form><br>
        <hr>        
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
               <h7>Periodo de vacaciones:</h7> 
        </div>
        <div class="columns medium-2">
                <span class="label"><?php echo utf8_decode($registro4["periodo"]); ?></span>
        </div>
        <div class="columns medium-7">
                <span class="label">Motivo del permiso: </span>
                <span><?php echo utf8_decode($registro4["motivo"]); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
            <span>A partir de:: <?php echo utf8_decode($registro4["fecha_inicio"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Hasta: <?php echo utf8_decode($registro4["fecha_termina"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Regresa: <?php echo utf8_decode($registro4["fecha_regresa"]); ?></span> 
        </div>
        <div class="columns medium-3">
           <span>Total de dias: <?php echo utf8_decode($registro4["total_dias"]); ?></span> 
        </div>
    </div>
    <hr> 
    <div class="row expanded">
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Jefe de Depto. de servicios administrativos</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Sub-Director</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Jefe inmediato</h6>
        </div>
    </div> <br>       
    </div>
<!-- papeleta 3 -->
<div class="contenedor">
    <div class="row expanded">
        <div class="columns medium-2">
            <img  src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        </div>
        <div class="columns medium-3">
            <span> Tipo de solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Tipo de empleado: <b><?php echo utf8_decode($registro4["tipo_empleado"]); ?></b> </span>
        </div>
        <div class="columns medium-2">
            <span> Goce de suledo: <b>Si</b> </span>
        </div> 

        <div class="columns medium-2">
            <span> Fecha: <b><?php echo utf8_decode($registro4["fecha_solicitud"]); ?></b> </span>

        </div> 
        

    </div>
    <div class="row">
        <div class="columns medium-12 text-center">
            <h7>*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h7>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="columns medium-12">
            <form  id="consulta" name="consulta_form" method="get">

                 <table>
                <thead>
                    <tr>
                        <th>N° Empleado</th>
                        <th>Nombre</th>
                        <th>Dependencia</th>
                        <th>Departamento</th>
                        <th>puesto</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php 

                        while ($registro3=$consulta3->fetch_assoc()) 
                            {
                    ?>
                            <tr>
                                <td><?php echo utf8_decode($registro3["num_emp"]); ?></td>
                                <td><?php echo utf8_decode($registro3["nombre"]); ?></td>
                                <td>Obras</td>
                                <td><?php echo utf8_decode($registro3["depto"]); ?></td>
                                <td><?php echo utf8_decode($registro3["puesto"]); ?></td>
                            </tr> 
                            

                    <?php 

                            }
                     ?>

                </tbody>
            </table>

        </form><br>
        <hr>        
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
               <h7>Periodo de vacaciones:</h7> 
        </div>
        <div class="columns medium-2">
                <span class="label"><?php echo utf8_decode($registro4["periodo"]); ?></span>
        </div>
        <div class="columns medium-7">
                <span class="label">Motivo del permiso: </span>
                <span><?php echo utf8_decode($registro4["motivo"]); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-3">
            <span>A partir de:: <?php echo utf8_decode($registro4["fecha_inicio"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Hasta: <?php echo utf8_decode($registro4["fecha_termina"]); ?></span>
        </div>
        <div class="columns medium-3">
            <span>Regresa: <?php echo utf8_decode($registro4["fecha_regresa"]); ?></span> 
        </div>
        <div class="columns medium-3">
           <span>Total de dias: <?php echo utf8_decode($registro4["total_dias"]); ?></span> 
        </div>
    </div>
    <hr> 
    <div class="row expanded">
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Jefe de Depto. de servicios administrativos</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Sub-Director</h6>
        </div>
        <div class="columns medium-4">
            <span> <u><?php echo $op; ?></u> </span><br>
            <h6>Jefe inmediato</h6>
        </div>
    </div> <br>       
</div>

<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| javascript |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>

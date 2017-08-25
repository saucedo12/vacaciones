


<!-- para crear pdf -->
<?php ob_start();
$id=$_GET["id"];
$mysqli=new mysqli("localhost","root","","vacaciones");
$NewPdf = "SELECT * FROM empleados WHERE id_empleado=1";
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
    <title>Imprimir Formato</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <!-- <link rel="stylesheet" href="../foundation-icons/foundation-icons.css" /> -->
    <link rel="stylesheet" href="../css/app.css">
     <STYLE type="text/css">
/*   body 
   {
    border-width: 1px; 
    border: solid; 
    font-size: .75em;
    text-align: center;
    padding: 0;
    margin: 0;
   }

form{
    margin: 0;
    padding: 0;
}*/
   img{
    width: 200px;
    height: 100px;

   }

 </STYLE>
</head>
<body>

 <div class=" text-left">
            <img src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">  
        

             &nbsp; &nbsp; &nbsp;
           <span> Tipo de solicitud: <b><?php echo utf8_decode($registro4["tipo_solicitud"]); ?></b> </span>
           <span> Tipo de empleado: <b><?php echo utf8_decode($registro4["tipo_empleado"]); ?></b> </span>
           <span> Goce de suledo: <b>Si</b> </span>
           <span> Fecha: <b><?php echo utf8_decode($registro4["fecha_solicitud"]); ?></b> </span>  
        </div>
</div>        
        <div class="columns medium-12 text-center">
            <h7>*UNA VEZ FIRMADA LA PAPELETA NO SE ACEPTARÁN CAMBIOS NI RECLAMACIONES</h7>
        </div>
         

<form  id="consulta" name="consulta_form" method="get">
 <!-- <div style="page-break-after: always;">  -->
    
         <table>
        <thead>
            <tr>
                <th>N° Empleado</th>
                <th>Nombre</th>
                <th>Dependencia</th>
                <th>Departamento</th>
                <th>puesto</th>
            </tr>   
                

<!-- </div> -->
         </thead>
        </br>
        <tbody>
            <?php 

                while ($registro=$consulta->fetch_assoc()) 
                    {
            ?>
                    <tr>
                        <td><?php echo utf8_decode($registro["num_emp"]); ?></td>
                        <td><?php echo utf8_decode($registro["nombre"]); ?></td>
                        <td>Obras</td>
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
<form  id="consulta" name="consulta_form" method="get">
  <div style="page-break-after: always;">  
 

        <img src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        <br><br>
         <table>
        <thead>
            <tr>
                <th>N° Empleado</th>
                <th>Nombre</th>
                <th>Dependencia</th>
                <th>Departamento</th>
                <th>puesto</th>
            </tr>   
                
     
</div>
         </thead>
        </br>
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
<form  id="consulta" name="consulta_form" method="get">
  <div style="page-break-after: always;">  


        <img src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        <br><br>
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
        </br>
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

</div>

</form><br>



</body>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</html>

<!-- con esto creamos un pdf -->
<?php 
require_once("../lib/dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->set_paper("letter","portrait");
// $dompdf->load_html( file_get_contents( 'http://localhost/tutoriales/pdf/alumnos.php' ) );
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "ejemplo".time().'.pdf';
$dompdf->stream($filename, array("Attachment" =>0));
 ?>
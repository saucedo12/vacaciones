<!-- para crear pdf -->
<?php ob_start();
$id=$_GET["id"];
$mysqli=new mysqli("localhost","root","","vacaciones");
$NewPdf = "SELECT * FROM rol_vacaciones WHERE id_rolVacaciones='$id' ";
$consulta = $mysqli->query($NewPdf);
$consulta2 = $mysqli->query($NewPdf);
$consulta3 = $mysqli->query($NewPdf);
$num_regs=$consulta->num_rows;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Consultas</title>
     <STYLE type="text/css">
   body 
   {
    border-width: 1px; 
    border: solid; 
    font-size: .75em;/*tamaño de la fuente*/
    text-align: center
   }

   img{
    width: 200px;
    text-align: left;
   }

 </STYLE>
    <!-- <link rel="stylesheet" href="../css/estilos.css"  />  Importamos la hoja de estilos -->
</head>
<body>
<form  id="consulta" name="consulta_form" method="get">
  <div style="page-break-after: always;">  
    <fieldset>
        <legend>Consultas</legend>
        <img src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        <br><br>
         <table >
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

                while ($registro=$consulta->fetch_assoc()) 
                    {
            ?>
                    <tr>
                        <td><?php echo utf8_decode($registro["id_rolVacaciones"]); ?></td>
                        <td><?php echo utf8_decode($registro["nombre"]); ?></td>
                    </tr> 

            <?php 

                    }
             ?>

        </tbody>
    </table>

    </fieldset>
</form><br>
<form  id="consulta" name="consulta_form" method="get">
  <div style="page-break-after: always;">  
    <fieldset>
        <legend>Consultas</legend>
        <img src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        <br><br>
         <table >
        <thead>
            <tr>
                <th>Folio</th>
                <th>Extensi&oacute;n</th>
                <th>Departamento</th>
                <th>Problema</th>
            </tr>
            <tr>
                <th>Usuario</th>
                <th>Fecha-Reporte</th>
                <th>Fecha-Atenci&oacute;n</th>
                <th>Atendio</th>
                <th>Obcervaci&oacute;n</th>
                <th>Estatus</th>
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
                        <td><?php echo utf8_decode($registro2["id_rolVacaciones"]); ?></td>
                        <td><?php echo utf8_decode($registro2["nombre"]); ?></td>
                    </tr> 

            <?php 

                    }
             ?>

        </tbody>
    </table>

    </fieldset>
</form><br>
<form  id="consulta" name="consulta_form" method="get">
  <div style="page-break-after: always;">  
    <fieldset>
        <legend>Consultas</legend>
         <img src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        <br><br>
         <table >
        <thead>
            <tr>
                <th>Folio</th>
                <th>Extensi&oacute;n</th>
                <th>Departamento</th>
                <th>Problema</th>
                <th>Usuario</th>
                <th>Fecha-Reporte</th>
                <th>Fecha-Atenci&oacute;n</th>
                <th>Atendio</th>
                <th>Obcervaci&oacute;n</th>
                <th>Estatus</th>
            </tr>    
                
            
</div>
        </thead>
        </br>
        <tbody>
            <?php 

                while ($registro3=$consulta3->fetch_assoc()) 
                    {
            ?>
                    <tr>
                   <td><?php echo utf8_decode($registro3["id_rolVacaciones"]); ?></td>
                        <td><?php echo utf8_decode($registro3["nombre"]); ?></td>
                    </tr> 

            <?php 

                    }
             ?>

        </tbody>
    </table>

    </fieldset>
</form>
</body>
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
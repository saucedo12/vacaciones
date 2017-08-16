<!-- para crear pdf -->
<?php ob_start();

$mysqli=new mysqli("localhost","root","","vacaciones");
$NewPdf = "SELECT * FROM registro_tbl";
$consulta = $mysqli->query($NewPdf);
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

 </STYLE>
    <!-- <link rel="stylesheet" href="../css/estilos.css"  />  Importamos la hoja de estilos -->
</head>
<body>

<form  id="consulta" name="consulta_form" method="get">
  <div style="page-break-after: always;">  
    <fieldset>
        <legend>Consultas</legend>
    
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

                // while ($registro=$consulta->fetch_assoc()) 
                    {
            ?>
                    <tr>
<!--                    <td><?php echo utf8_decode($registro["Folio"]); ?></td>
                        <td><?php echo utf8_decode($registro["Extension"]); ?></td>
                        <td><?php echo utf8_decode($registro["Departamento"]); ?></td>
                        <td><?php echo utf8_decode($registro["Problema"]); ?></td>
                        <td><?php echo utf8_decode($registro["Usuario"]); ?></td>
                        <td><?php echo utf8_decode($registro["Fecha_rep"]); ?></td>
                        <td><?php echo utf8_decode($registro["Fecha_ate"]); ?></td>
                        <td><?php echo utf8_decode($registro["Atendio"]); ?></td>
                        <td><?php echo utf8_decode($registro["Obcervacion"]); ?></td>
                        <td><?php echo utf8_decode($registro["Estatus"]); ?></td> -->
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

                // while ($registro=$consulta->fetch_assoc()) 
                    {
            ?>
                    <tr>
<!--                    <td><?php echo utf8_decode($registro["Folio"]); ?></td>
                        <td><?php echo utf8_decode($registro["Extension"]); ?></td>
                        <td><?php echo utf8_decode($registro["Departamento"]); ?></td>
                        <td><?php echo utf8_decode($registro["Problema"]); ?></td>
                        <td><?php echo utf8_decode($registro["Usuario"]); ?></td>
                        <td><?php echo utf8_decode($registro["Fecha_rep"]); ?></td>
                        <td><?php echo utf8_decode($registro["Fecha_ate"]); ?></td>
                        <td><?php echo utf8_decode($registro["Atendio"]); ?></td>
                        <td><?php echo utf8_decode($registro["Obcervacion"]); ?></td>
                        <td><?php echo utf8_decode($registro["Estatus"]); ?></td> -->
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

                // while ($registro=$consulta->fetch_assoc()) 
                    {
            ?>
                    <tr>
<!--                    <td><?php echo utf8_decode($registro["Folio"]); ?></td>
                        <td><?php echo utf8_decode($registro["Extension"]); ?></td>
                        <td><?php echo utf8_decode($registro["Departamento"]); ?></td>
                        <td><?php echo utf8_decode($registro["Problema"]); ?></td>
                        <td><?php echo utf8_decode($registro["Usuario"]); ?></td>
                        <td><?php echo utf8_decode($registro["Fecha_rep"]); ?></td>
                        <td><?php echo utf8_decode($registro["Fecha_ate"]); ?></td>
                        <td><?php echo utf8_decode($registro["Atendio"]); ?></td>
                        <td><?php echo utf8_decode($registro["Obcervacion"]); ?></td>
                        <td><?php echo utf8_decode($registro["Estatus"]); ?></td> -->
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
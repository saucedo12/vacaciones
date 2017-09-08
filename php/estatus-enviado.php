<?php //mostrar los pendientes
 include("php/conexion.php");
 // query para mostrar los datos del usuario
$consulta="SELECT * FROM `rol_vacaciones` WHERE estatus='Enviado' ";
$ejecutar_consulta = $conexion->query($consulta);
$registro = $ejecutar_consulta->num_rows;

 ?>

 <!-- tabla para mostrar pendientes en pantalla principal -->
<table>
        <thead>
            <tr>
                <th>Fecha de solicitud</th>
                <th>Nombre</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
                <?php 
      
                while ($registro=$ejecutar_consulta->fetch_assoc()) 
                    {
                    ?>
                    <tr>
                        <td><?php echo utf8_decode($registro["fecha_solicitud"]); ?></td>
                        <td><?php echo utf8_decode($registro["nombre"]); ?></td>
                        <td><a title="Actualizar estatus" href="php/CambiosReg.php?folio1=<?php echo $registro['estatus'];?> " > <?php echo $registro['estatus'];?> </a></td>
                           
                   <!--    <a title="Actualizar" href="php/CambiosReg.php?folio1=<?php echo $registro_Atendio['Folio'];?> " >  </a> -->
                    </tr>   
                <?php 

                    }
             ?>

        </tbody>
    </table>
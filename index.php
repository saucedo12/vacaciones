
<?php error_reporting(E_ALL ^ E_NOTICE); // Informar de todos los errores , excepto: E_ALL Y E_NOTICE
?>
        


<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacaciones</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="medium-12 columns text-center">
        <h1>Control de vacaciones</h1>
      </div>
    </div>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| MENU |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <div class="row">
      <div class="button-group large-12 expanded stacked-for-small columns">
        <!-- <a href="" class="button">Inicio</a> -->
        <a href="php/formato-vacaciones.php" class="button">Vacaciones</a>
        <a href="php/rol-vacaiones.php" class="button">Consultas-Historial</a>
        <a href="php/dias-vacaciones.php" class="button">Consultas-Dias</a>
        <a href="php/nuevos-empleados.php" class="button">Alta-Empleado</a>
        <a href="php/baja-empleados.php" class="button">Baja-Empleado</a>
        <a href="php/actualizar-empleado.php" class="button">Cambios-Empleado</a>
        <!-- <a href="php/pruebaPDF.php" class="button hollow success">PDF</a> -->
      </div>
    </div>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| MIGAS DE PAN |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <div class="row">
      <div class="columns">
        <ul class="breadcrumbs">
          <li>Home</li>
        </ul>
      </div>
    </div>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| PRINCIPAL |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <div class="row">
      <div class="columns medium-12">
        <?php  include("php/estatus-enviado.php"); ?>
      </div>
    </div>

    <footer>  
          <h4>Departamento de sistemas de Obras Publicas Municipales</h4>
          <h4>Proyecto elaborado con la herramienta <b> <a href="http://foundation.zurb.com/" target="_blank">Foundation</a> </b></h4>
    </footer>





<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| javascript |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

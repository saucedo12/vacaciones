<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuevo empleado</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| MENU |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
 <div class="row">
  <div class="columns medium-12">
     <div class="top-bar" id="responsive-menu">

      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li><a href="../index.php" class="button" >Regresar</a></li>
          <li class="menu-text">DOPM</li>
          <li class="has-submenu">
            <a href="#0">One</a>
            <ul class="submenu menu vertical" data-submenu>
              <li><a href="#0">One</a></li>
              <li><a href="#0">Two</a></li>
              <li><a href="#0">Three</a></li>
            </ul>
          </li>
          <li><a href="#0">Two</a></li>
          <li><a href="#0">Three</a></li>
        </ul>
      </div>

      <div class="top-bar-left">
<!--         <ul class="menu">
          <li><button type="button" class="button">Search</button></li>
        </ul> -->
      </div>
    </div>    
  </div>
 </div>
<!-- ||||||||||||||||||||||PRINCIPAL||||||||||||||||||||||| -->

  <form action="insert-empleado.php" method="POST" enctype="multipart/form-data" >
  <br>
      <!-- <legend>Nuevo usuario de Departamento</legend> -->
      <div class="row">
        <div class="columns medium-6">
          <label for="num_emp"># Empleado:</label>
          <input type="number" id="num_emp" name="num_emp_num" placeholder="" required="">
        </div>
        <div class="columns medium-6">   
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre_text" placeholder="" required="" />
        </div>        
      </div>
      <div class="row">
        <div class="columns medium-6">
          <label for="departamento">Departamento:</label>
          <input type="text" id="departamento" name="departamento_text" placeholder="" required="" />
        </div>
        <div class="columns medium-6">
          <label for="puesto">Puesto:</label>
          <input type="text" id="puesto" name="puesto_text" placeholder="" required="" />
        </div>        
      </div>
      <div class="row">
        <div class="columns medium-6">
          <label for="fecha_ing">Fecha Ingreso:</label>
          <input type="date" id="fecha_ing" name="fecha_date" placeholder="" required="" />
        </div>
         <div class="columns medium-6">
          <label for="">Sexo:</label>
          <input type="radio" id="M" name="sexo_radio" value="M" placeholder="" required="" />
          <label for="M">M</label>
          <input type="radio" id="F" name="sexo_radio" value="F" placeholder="" required="" />
          <label for="F">F</label>
        </div>        
      </div>
      <div class="row">
         <div class="columns medium-6">
          <label for="tipo">Tipo empleado:</label>
            <select id="tipo" name="tipo-empleado_select">
              <option disabled>Seleccionar uno:</option>
              <option value="CQ">Confianza quincena</option>
              <option value="CS">Confianza semana</option>
              <option value="SIND">Sindicato</option>
            </select>
        </div> 
          <br>
        <div class="columns medium-6">
            <input class="button" type="submit" value="guardar">
        </div>               
      </div> 


     <?php include("mensajes.php"); ?>
 


  </form> 
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| javascript |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>




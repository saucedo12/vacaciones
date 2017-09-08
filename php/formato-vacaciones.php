<?php
// funcion para tomar el año mes y dia
 $timezone = "America/Chihuahua";
  date_default_timezone_set($timezone);
  $today = date("Y");

  // funcion para tomar el año mes 
 $timezone = "America/Chihuahua";
  date_default_timezone_set($timezone);
  $today2 = date("Y");
  $today3=$today2-1;

   $timezone = "America/Chihuahua";
  date_default_timezone_set($timezone);
  $today4 = date("Y-m-d");

     $timezone = "America/Chihuahua";
  date_default_timezone_set($timezone);
  $today5 = date("d-m-y");
?>
<?php error_reporting(E_ALL ^ E_NOTICE); // Informar de todos los errores , excepto: E_ALL Y E_NOTICE
?>
<?php 
// hacemos conexion para buscar por empleado
  include("conexion.php");
			if($_GET["num_emp_text"]!=null) 
			{
				$conexion2=conectarse();
				$buscar = $_GET["num_emp_text"];
				$consulta = "SELECT * FROM empleados WHERE num_emp='$buscar'";
				$ejecutar_consulta = $conexion2->query($consulta);
				$registro_empleados = $ejecutar_consulta->fetch_assoc();
			}	
				$conexion3=conectarse();
				$consulta1 = "SELECT id_rolVacaciones FROM rol_vacaciones ORDER BY id_rolVacaciones DESC";
				$ejecutar_consulta1 = $conexion3->query($consulta1);
				$registro_empleados1 = $ejecutar_consulta1->fetch_assoc();
	
?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Formato de vacaciones</title>
	<link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    </div>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| MENU |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<div class="row">
  	<div class="row columns medium-12">
     	<div class="top-bar" id="responsive-menu">
		    <div class="top-bar-left">
		        <ul class="dropdown menu" data-dropdown-menu>
		          <li><a href="../index.php" class="button" >Regresar</a></li>
		          <li class="menu-text">DOPM</li>
<!-- 		          <li class="has-submenu">
		            <a href="#0">One</a>
		            <ul class="submenu menu vertical" data-submenu>
		              <li><a href="#0">One</a></li>
		              <li><a href="#0">Two</a></li>
		              <li><a href="#0">Three</a></li>
		            </ul>
		          </li>
		          <li><a href="#0">Two</a></li>
		          <li><a href="#0">Three</a></li> -->
		        </ul>
		    </div>
	      	<div class="top-bar-rigth">
				<!-- Form para buscar por empleado -->
				<form>
					<div class="row">
					<div class="columns">
						<label for="">
							<input  type="text" id="busrcar_num_emp" name="num_emp_text" placeholder="N° Empleado"  required>
						</label>
					</div>
					<div class="columns">
						<label for="">
							<input id="j" class="button" type="submit" name="btn"   value="Buscar"  />
						</label>						
					</div>						
					</div>	
				</form>
	      	</div>
    	</div>    
  	</div>
 </div>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| MIGAS DE PAN ||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| PRINCIPAL |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<div class="row">

<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| FORMULARIO |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
	<div class="row callout small  columns large-12">
		<form action="guardar-formato.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="column medium-3 text-center">
					<label name="fechaFormato_label" >
						<b>Fecha:</b><br> <?php echo $today5; ?>
					</label>
					<input type="hidden" name="fechaFormato_hidden" value="<?php echo $today4; ?>">
				</div>
				<div class="column medium-3 text-center">
					<label name="fechaFormato_label" >
						<b>Solicitud:</b>
					</label>
					  <input name="tipo-solicitud_radio" id="radio_vacaciones" type="radio" required="" value="Vacaciones"><label for="radio_vacaciones">Vacaciones</label>
					  <input name="tipo-solicitud_radio" id="radio_permisos" type="radio" value="Permiso"><label for="radio_permisos">Permisos</label>
				</div>
				<div class="column medium-3 text-center">
					<label name="fechaFormato_label" >
						<b>Goce de sueldo:</b>
					</label>
					<input name="sueldo_radio" id="radio_si" type="radio" required="" value="SI"><label for="radio_si">Si</label>
					<input name="sueldo_radio" id="radio_no" type="radio" required="" value="NO"><label for="radio_no">No</label>
				</div>
				<div class="column medium-3 text-center">
					<label name="fechaFormato_label" >
						<b>Tipo de empleado: </b><br>
						<input type="text" value="<?php echo $registro_empleados["tipo_empleado"] ?>">
					</label>
				</div>


			</div>
			<!-- fila 1 -->
        	<div class="row">
				<div class="medium-3 columns">
        			<label>N° Empleado:
			        <input type="text" placeholder="." name="num_emp_text" required value="<?php echo $registro_empleados["num_emp"]; ?>" >
			      </label>
        		</div>
        		<div class="medium-9 columns">
			      	<label>Nombre:
			        	<input type="text" placeholder="." name="nombre_text" required="" value="<?php echo $registro_empleados["nombre"] ?>" />
			      	</label>
			    </div>

<!--         		<div class="medium-4 columns">
	        		<fieldset class="fieldset">
					  <legend>SOLICITUD</legend>
					  <input name="tipo-solicitud_radio" id="radio_vacaciones" type="radio" required="" value="Vacaciones"><label for="radio_vacaciones">Vacaciones</label>
					  <input name="tipo-solicitud_radio" id="radio_permisos" type="radio" value="Permiso"><label for="radio_permisos">Permisos</label>
					</fieldset>	
        		</div>
        		<div class="medium-4 columns">
					<label>Tipo de empleado
					  <select name="tipo_empleado_select" required="">
					    <option disabled>Seleccionar uno:</option>
					    <option value="<?php echo $registro_empleados["tipo_empleado"] ?>"><?php echo $registro_empleados["tipo_empleado"] ?></option>
					  </select>
					</label>
        		</div> -->
        		
        	</div>
			<!-- fila 2 -->
        	<div class="row">
        		<!-- Busque por numero de empleado -->

				<div class="medium-6 columns">
			      <label>Departamento
			        <input type="text" placeholder="." name="departamento_text" required="" value="<?php echo utf8_decode($registro_empleados["depto"]) ?>">
			      </label>
  				</div>
				<div class="medium-6 columns">
			      <label>Puesto
			        <input type="text" placeholder="." name="puesto_text" required="" value="<?php echo $registro_empleados["puesto"] ?>">
			      </label>
			    </div>


			</div>

			    
			<!-- fila 3 -->
			<!-- periodo dias y motivo -->

  			<div class="row">
			    <div class="large-4 columns">
			    	<div class="row">
			    		<div class="columns">
					      <label>Se va del:
					        <input type="date" value="<?php echo $today5; ?>" placeholder="." name="del_date" required="">
					      </label>
			    		</div>
			    	</div>
			    	<div class="row">
			    		<div class="columns">
				    		<fieldset class="fieldset">
							  <legend>Periodo</legend>
							  <div class="row">
							  	<div class="columns">
							  		<input id="checkbox1" name="añoAnt_check"  type="checkbox" value="<?php echo $today3; ?>"><label for="checkbox1"><?php echo $today3; ?></label>
							  	</div>
							  	<div class="columns">
							  		<input id="checkbox2" name="añoAct_check"  type="checkbox" value="<?php echo $today2; ?>"><label for="checkbox2"><?php echo $today2; ?></label>
							  	</div>
							  </div>
							  <div class="row">
							  	<div class="columns">
							  		<input id="checkbox3" type="checkbox" name="periodoAnt_check1" value="1°"><label for="checkbox3">1</label>
							  		<input id="checkbox4" type="checkbox" name="periodoAnt_check2" value="2°"><label for="checkbox4">2</label>
							  	</div>
							  	<div class="columns">
							  		<input id="checkbox3" type="checkbox" name="periodoAct_check1" value="1°"><label for="checkbox3">1</label>
							  		<input id="checkbox4" type="checkbox" name="periodoAct_check2" value="2°"><label for="checkbox4">2</label>
							  	</div>
							  </div>

							  
							</fieldset>	
			    		</div>

			    	</div>
			    </div>
			    <div class="large-8 columns">
			    	<div class="row">
			    		<div class="columns">
					      <label>Hasta:
					        <input type="date" value="<?php echo $today5; ?>" placeholder="." name="al_date" required="">
					      </label>
			    		</div>
		<!-- 	    	</div>
			    	<div class="row"> -->
			    		<div class="columns">
					      <label>Regresa:
					        <input type="date" value="<?php echo $today5; ?>" placeholder="." name="regresa_date" required="">
					      </label>
				    	</div>

			    	</div>
			  <!--   </div>
			    <div class="large-4 columns"> -->
			    	<div class="row">
			    		<div class="columns">
					      <label>Dias del periodo vacacional 
					        <input type="number" placeholder="." name="total-dias_num" required="">
					      </label>
			    		</div>
			    	<!-- </div>
			    	<div class="row"> -->
			    		<div class="columns">
			    		<label>Quinquenios 
					        <input type="number" placeholder="." name="quinquenio_num" required="">
					      </label>
					    </div>
			    	</div>
			    	<div class="row">
					    <div class="large-12 columns">
					      <label>MOTIVO
					        <input type="text" placeholder="." name="motivo_text">
					      </label>
					    </div>
  					</div>
			    </div>

  			</div>
				<!-- FILA 4 -->
  				<!-- Zona de jefes -->
			<div class="row">
				<div class="large-4 columns">
					<label>Jefe de Depto. de Servicios Administrativos 
					  <select name="jefeDepto" required="">
					    <option disabled>Seleccionar uno:</option>
					    <option value="Lic. Estefanía Elvira Sandoval Mariscal">Lic. Estefanía Elvira Sandoval Mariscal</option>	    
					  </select>
					</label>
				</div>
				<div class="large-4 columns">
					<label>Sub. Director
					  <select name="subDirector" required="">
					    <option disabled>Seleccionar uno:</option>
					    <option value="N/A">N/A</option>
					    <option value="Ing. Javier Villarreal Posada">Ing. Javier Villarreal Posada</option>
					    <!-- <option value="">Ing. Carlos Humberto Cabello Gil  </option> -->
					    <option value="Arq. Carlos Aguilar Garcia">Arq. Carlos Aguilar Garcia </option>
					  </select>
					</label>
				</div>
				<div class="large-4 columns">
					<label>Jefe Inmediato
					  <select name="jefeInmediato" required="">
					    <option disabled>Seleccionar uno:</option>
					    <option value="N/A">N/A</option>
					    <option value="Ing. Arturo Gomez Ballona">Ing. Arturo Gomez Ballona</option>
					    <option value="Ing. Luis Carlos Martinez">Ing. Luis Carlos Martinez</option>
					    <option value="Lic. Yanai Angulo Herrera">Lic. Yanai Angulo Herrera</option>
					    <option value="Ing. Juan Pablo Moreno Cordero">Ing. Juan Pablo Moreno Cordero</option>
					    <option value="Ing. Javier Villarreal Posada">Ing. Javier Villarreal Posada </option>
					    <option value="Ing. Carlos Humberto Cabello Gil">Ing. Carlos Humberto Cabello Gil</option>
					    <option value="Lic. Luis Raúl Valenzuela Colomo">Lic. Luis Raúl Valenzuela Colomo</option>
					    <option value="Ing. Ma. del Carmen Mendoza Rugelio">Ing. Ma. del Carmen Mendoza Rugelio</option>
					    <option value="C. Román Narciso Hinojos Díaz">C. Román Narciso Hinojos Díaz</option>
					    <option value="Lic. Alejandra Márquez Chávez">Lic. Alejandra Márquez Chávez</option>
					    <option value="Ing. Carlos Humberto Cabello Gil">Ing. Carlos Humberto Cabello Gil</option>
					  </select>
					</label>
				</div>
			</div> 

  			<div class="row">
  				<div class="columns large-2 ">
  					<div class="input-group-button">
					    <input type="submit" class="button" value="Guardar">
					 </div>
  				</div>
			   <div class="large-2 columns">
			      	<div class="button-group expanded">	
					 <a class="button" href="pruebaPDF.php?id=<?php echo $registro_empleados1['id_rolVacaciones'];?>  ">Imprimir</a>
					</div>
			    </div>
  			</div>

        </form>  
	</div>
	<?php include("mensajes.php"); ?>
</div>
 
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| javascript |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>	
</body>
</html>
<!-- Script para validar el formulario -->
<script>
	window.onchange=function()
	{
		var folio = document.forms("busrcar_num_emp");
		
		folio.onchange = ValidarForm;
		function ValidarForm()
		{
			window.location="?$mensaje=Busqueda"+folio.value
		}

	}

</script>

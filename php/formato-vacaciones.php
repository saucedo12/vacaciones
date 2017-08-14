<?php
// funcion para tomar el año mes y dia
 $timezone = "America/Chihuahua";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");

  // funcion para tomar el año mes 
 $timezone = "America/Chihuahua";
  date_default_timezone_set($timezone);
  $today2 = date("Y-m");
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
<!--     <div class="row">
      <div class="button-group large-12 expanded ">
        <a href="" class="button">Inicio</a>
        <a href="php/formato-vacaciones.php" class="button">Vacaciones</a>
        <a href="" class="button">Consultas</a>
        <a href="" class="button hollow success">Altas</a>
        <a href="" class="button hollow alert">Bajas</a>
      </div>
    </div>
 -->
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| MIGAS DE PAN |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| PRINCIPAL |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

    <div class="row">
		<div class="small-12 medium-12 columns text-center">
			<div class="row expanded">
				<div class="columns small-12 medium-2">
					<div class="button-group large-12 expanded ">
				       <a href="../index.html" class="button">Regresar</a>
		<!-- 		       <a href="php/formato-vacaciones.php" class="button">Vacaciones</a>
				       <a href="" class="button">Consultas</a>
				       <a href="" class="button hollow success">Altas</a>
				       <a href="" class="button hollow alert">Bajas</a> -->
			    	</div>
				</div>
				<div class="columns small-12 medium-10">
					<h5>PRESIDENCIA MUNICIPAL DE CHIHUAHUA</h5>
				</div>
			</div>
			
		</div>
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| FORMULARIO |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
	<div class="row callout columns large-12">
		<form action="" method="post" enctype="multipart/form-data">
        	<div class="row">
				<div class="small-12 medium-4 columns">
        			<img class="thumbnail logo-hor" src="../img/LOGO-HORIZONTAL-CHICO.jpg" alt="">
        		</div>

        		<div class="medium-4 columns">
	        		<fieldset class="fieldset">
					  <legend>Tipo de solicitud</legend>
					  <input name="tipo-solicitud" id="radio_vacaciones" type="radio" value="Vacaciones"><label for="checkbox_vacaciones">Vacaciones</label>
					  <input name="tipo-solicitud" id="radio_permisos" type="radio" value="Permiso"><label for="checkbox_permisos">Permisos</label>
					</fieldset>	
        		</div>
        		<div class="medium-4 columns">
					<label>Tipo de empleado
					  <select>
					    <option disabled>Seleccionar uno:</option>
					    <option value="cq">Confianza quincena</option>
					    <option value="cs">Confianza semana</option>
					    <option value="sin">Sindicato</option>
					  </select>
					</label>
        		</div>
        		
        	</div>
        	<div class="row">
			    <div class="large-3 columns">
			      <label>N° EMPLEADO:
			        <input type="text" placeholder="." name="empleado_text">
			      </label>
			    </div>

			    <div class="large-9 columns">
			      <label>NOMBRE:
			        <input type="text" placeholder="." name="nombre_text">
			      </label>
			    </div>
  			</div>

  			<div class="row">
			    <div class="large-4 columns">
			      <label>DEPENDENCIA
			        <input type="text" placeholder="." name="dependencia_text">
			      </label>
			    </div>
			    <div class="large-4 columns">
			      <label>DEPARTAMENTO
			        <input type="text" placeholder="." name="departamento_text">
			      </label>
			    </div>
			    <div class="large-4 columns">
			      <label>PUESTO
			        <input type="text" placeholder="." name="puesto_text">
			      </label>
			    </div>
  			</div>

  			<div class="row">
			    <div class="large-4 columns">
			    	<div class="row">
			    		<div class="columns">
				    		<label>AÑO
					        	<input type="text" placeholder="." name="año">
					      	</label>	
			    		</div>
			    	</div>
			    	<div class="row">
			    		<div class="columns">
				    		<fieldset class="fieldset">
							  <legend>Periodo</legend>
							  <div class="row">
							  	<div class="columns">
							  		<input id="checkbox1" type="checkbox" value="2016"><label for="checkbox1">2016</label>
							  	</div>
							  	<div class="columns">
							  		<input id="checkbox2" type="checkbox" value="2017"><label for="checkbox2">2017</label>
							  	</div>
							  </div>
							  <div class="row">
							  	<div class="columns">
							  		<input id="checkbox3" type="checkbox" value="primero"><label for="checkbox3">1</label>
							  		<input id="checkbox4" type="checkbox" value="segundo"><label for="checkbox4">2</label>
							  	</div>
							  	<div class="columns">
							  		<input id="checkbox3" type="checkbox" value="primero"><label for="checkbox3">1</label>
							  		<input id="checkbox4" type="checkbox" value="segundo"><label for="checkbox4">2</label>
							  	</div>
							  </div>

							  
							</fieldset>	
			    		</div>

			    	</div>
			    </div>
			    <div class="large-8 columns">
			    	<div class="row">
			    		<div class="columns">
					      <label>DEL:
					        <input type="date" placeholder="." name="del_date">
					      </label>
			    		</div>
		<!-- 	    	</div>
			    	<div class="row"> -->
			    		<div class="columns">
					      <label>AL:
					        <input type="date" placeholder="." name="al_date">
					      </label>
				    	</div>

			    	</div>
			  <!--   </div>
			    <div class="large-4 columns"> -->
			    	<div class="row">
			    		<div class="columns">
					      <label>REGRESA:
					        <input type="date" placeholder="." name="regresa_date">
					      </label>
			    		</div>
			    	<!-- </div>
			    	<div class="row"> -->
			    		<div class="columns">
					      <label>TOTAL-DIAS
					        <input type="number" placeholder="." name="total-dias_num">
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

  				<!-- Zona de jefes -->
			<div class="row">
				<div class="large-4 columns">
					<label>Jefe de Depto. de Servicios Administrativos 
					  <select>
					    <option disabled>Seleccionar uno:</option>
					    <option value="">Lic. Estefanía Elvira Sandoval Mariscal</option>
					    <!-- <option value="">Ing. Carlos Humberto Cabello Gil</option> -->
					  </select>
					</label>
				</div>
				<div class="large-4 columns">
					<label>.
					  <select>
					    <option disabled>Seleccionar uno:</option>
					    <option value="">Ing. Javier Villarreal Posada</option>
					    <option value="">Ing. Carlos Humberto Cabello Gil  </option>
					    <option value="">Arq. Carlos Aguilar Garcia </option>
					  </select>
					</label>
				</div>
				<div class="large-4 columns">
					<label>Jefe Inmediato
					  <select>
					    <option disabled>Seleccionar uno:</option>
					    <option value="">Ing. Arturo Gomez Ballona</option>
					    <option value="">Lic. Yanai Angulo Herrera</option>
					    <option value="">Ing. Juan Pablo Moreno Cordero</option>
					    <option value="">Ing. Javier Villarreal Posada </option>
					    <option value="">Ing. Carlos Humberto Cabello Gil</option>
					    <option value="">Lic. Luis Raúl Valenzuela Colomo</option>
					    <option value="">Ing. Ma. del Carmen Mendoza Rugelio</option>
					    <option value="">C. Román Narciso Hinojos Díaz</option>
					    <option value="">Lic. Alejandra Márquez Chávez</option>
					    
					  </select>
					</label>
				</div>
			</div> 

  			<div class="row">
			   <div class="large-6 columns">
			      	<div class="expanded button-group">
					 <a class="button">Guardar</a>
					 <a class="button" href="pdf-formato.php">Imprimir</a>
					</div>
			    </div>
<!-- 			<div class="large-6 columns">
hola
			</div> -->
  			</div>
        </form>  
	</div>
	
    </div>
 
<!--  ||||||||||||||||||||||||||||||||||||||||||||||||||||||| javascript |||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>	
</body>
</html>
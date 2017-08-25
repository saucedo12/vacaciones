<form action="insert-empleado.php" method="POST" enctype="multipart/form-data" >
<a href="../index.html">Regresar</a>
<br>
  <fieldset>
  <legend>Nuevo usuario de Departamento</legend> 
  <div>
    <label for="num_emp"># Empleado:</label>
    <input type="number" id="num_emp" name="num_emp_num" placeholder="" required="">
  </div>
  <div>   
      <label for="nombre">Nombre:</label>
	    <input type="text" id="nombre" name="nombre_text" placeholder="" required="" />
  </div>

  <div>
   	<label for="departamento">Departamento:</label>
	  <input type="text" id="departamento" name="departamento_text" placeholder="" required="" />
  </div>
  <div>
    <label for="puesto">Puesto:</label>
    <input type="text" id="puesto" name="puesto_text" placeholder="" required="" />
  </div>
  <div>
    <label for="fecha_ing">Fecha Ingreso:</label>
	  <input type="date" id="fecha_ing" name="fecha_date" placeholder="" required="" />
  </div>
   <div>
    <label for="">Sexo:</label>
    <input type="radio" id="M" name="sexo_radio" value="M" placeholder="" required="" />
    <label for="M">M</label>
    <input type="radio" id="F" name="sexo_radio" value="F" placeholder="" required="" />
    <label for="F">F</label>
  </div>
   <div>
    <label for="tipo">Tipo empleado:</label>
      <select id="tipo" name="tipo-empleado_select">
        <option disabled>Seleccionar uno:</option>
        <option value="CQ">Confianza quincena</option>
        <option value="CS">Confianza semana</option>
        <option value="SIND">Sindicato</option>
      </select>
  </div>
    <br>
  <div>
      <input type="submit" value="guardar">
  </div>
 <?php include("mensajes.php"); ?>
  </fieldset>
</form>
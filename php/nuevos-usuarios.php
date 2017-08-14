<form action="insert-empleado.php" method="post" enctype="multipart/form-data" >
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
    <label for="fecha_ing">Fecha Ingreso:</label>
	  <input type="date" id="fecha_ing" name="ext_text" placeholder="" required="" />
  </div>
   <div>
    <label for="">Sexo:</label>
    <input type="radio" id="M" name="sexo_radio" placeholder="" required="" />
    <label for="M">M</label>
    <input type="radio" id="F" name="sexo_radio" placeholder="" required="" />
    <label for="F">F</label>
  </div>
   <div>
    <label for="fecha_ing">Tipo empleado:</label>
      <select>
        <option disabled>Seleccionar uno:</option>
        <option value="cq">Confianza quincena</option>
        <option value="cs">Confianza semana</option>
        <option value="sin">Sindicato</option>
      </select>
  </div>
    <br>
  <div>
      <input type="submit" value="guardar">
  </div>
  </fieldset>
</form>
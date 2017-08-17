
<?php 
//creamos una función
// Una función es un bloque de instrucciones que se pueden utilizar en varias ocasiones en un programa.
function conectarse()
{
//creamos las variables para la conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vacaciones";

// Creamos conexion a BD
$conn = new mysqli($servername, $username, $password, $dbname);
// Checamos la conexion
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

//creamos un query para guardar el ultimo registro del folio
$consulta="SELECT id_rolVacaciones FROM rol_vacaciones ";
$ejecutar_consulta=$conn->query($consulta);//ejecutamos el metodo query
$registro_consulta=$ejecutar_consulta->fetch_assoc();//recupera una fila de resultado como una matriz asociativa

   echo $registro_consulta["id_rolVacaciones"]+1;//imprimimos el registro y le sumamos 1 para generar el folio automaticamente

   return $registro_consulta;
   
}

$folio=conectarse();//en la variable folio guardamos toda la funcion

?> 





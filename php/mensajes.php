<?php 
//funcion para mostrar mensajes
if (isset($_GET["mensaje"])) {
	$mensaje=$_GET["mensaje"];
	echo "<br /> <h6 class='mensajes'> <b>$mensaje</b>   </h6><br />";
}
 ?>
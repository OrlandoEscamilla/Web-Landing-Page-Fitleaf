<?php

/*
$conexion = new mysqli("localhost","chocolat_fitlea","4815162342","chocolat_fitleaf");
if($conexion){echo "conexion exitosa";}
else{echo "conexion fallida";}
*/



$conexion = mysqli_connect("localhost","root","","chocolat_fitleaf");

//mysql_set_charset('utf8');
if ($conexion)
  {

  }
  else{
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>

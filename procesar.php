<?php

include("conexion.php");

$nombre = $_POST['name'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO prospectos (nombre, correo, mensaje) VALUES('$nombre', '$correo', '$mensaje')";

$ejecutar = mysqli_query($conexion, $sql) or die("problems in query: " . mysql_error());

if ($ejecutar){
	echo '<script type="text/javascript" >alert("Information saved successfully!")</script>';
	echo '<script type="text/javascript" >window.location="index.html";</script> ';
}
else{
   echo '<script type="text/javascript" >alert("Information not saved sorry :/")</script>';
	echo '<script type="text/javascript" >window.location="index.html";</script>';
}

?>

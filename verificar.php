<?php

 include("conexion.php");
 if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM users_access WHERE name_user = '$email' and psw_contrasena = '$password'";
   $res = $conexion->query($sql);


   if($info = $res->fetch_assoc()){
     session_start();
     $_SESSION['correo'] = $email;
     $_SESSION['password'] = $password;

     header("Location: panel.php");
   }
   else{
     echo "Datos incorectos verifique su informacion";
   }
 }



 else{
 	echo "son erroneos tus datos";
 }




 ?>

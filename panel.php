<?php
include("conexion.php");
@session_start();
if(isset($_SESSION['correo']) and isset($_SESSION['password'])){
	$email = $_SESSION['correo'];
	$password = $_SESSION['password'];

}
else{
header("Location: admin.html");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel de Administracion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>





      <div class="containerUsers">
				<div class="container">
          <br>
          <div class="row">
              <a href="cerrar_sesion.php"><button type="button" class="btn btn-danger" >Cerrar Sesión</button></a>
          </div>
<hr>


				 <h5 class="alert-heading">PROSPECTOS</h5>

				 <div class="row">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Nombre</th>
								<th scope="col">Correo</th>
                <th scope="col">Mensaje</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include("conexion.php");
								$sql = "SELECT * FROM prospectos";
								$respuesta = $conexion->query($sql);
								while ($contacto = $respuesta->fetch_assoc()) {
							 ?>

							<tr>

								<td><?php echo $contacto['id_prospecto']; ?></td>
								<td><?php echo $contacto['nombre']; ?></td>
								<td><?php echo $contacto['correo']; ?></td>
								<td><?php echo $contacto['mensaje']; ?></td>

							</tr>
							<?php
								}
 							?>
						</tbody>
					</table>
				</div>
      </div>
    </div>




  </body>
</html>

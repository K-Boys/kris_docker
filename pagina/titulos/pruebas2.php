<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

 	
 	<link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap4.min.css">

 	<script src="jquery/jquery-3.5.1.js"></script>
	<script src="jquery/jquery.dataTables.min.js"></script>
	<script src="jquery/dataTables.bootstrap4.min.js"></script>
	<script src="sweetalert/sweetalert2@11.js"></script>
</head>

<body align="center">



<a href="index.php"><img id="logout" src ="css/logout.png"></a>

	<form action="insertar_carrera.php" 
	method="POST" enctype="multipart/form-data">

		<h2>Registrar Nueva Carrera</h2>
		Nombre: <br>
		<input  type="text" name="nombre_carrera" required="" placeholder="Nombre Carrera"> 
		<h2>Registrar Estado</h2>
		Estado: <br>
		<input type="text" name="nombre_estado" required="" placeholder="Nombre de Estado"> 


		<button type="submit" name="Guardar" >Guardar</button>
	
	</form>
</body>
</html>

<script>
	function alert(){
	 Swal.fire({
	  title: 'REGISTRO CARRERA',
	  imageUrl: 'css/logout.png',
  imageWidth: 200,
  imageHeight: 200,
  imageAlt: 'Custom image',
  showCancelButton: false,
  showConfirmButton: false,
  timer:'1500'
	 })	
		} alert()
                       
</script>
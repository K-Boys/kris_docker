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
</head>
<script src="sweetalert/sweetalert2@11.js"></script>
<body align="center">
	
	<a href="index.php"><img id="logout" src ="css/logout.png"></a>
	<form action="insertar_examen.php" 
	method="POST" enctype="multipart/form-data">
		<h2>Registrar Examen profesional</h2>
		Estado: <br>
		<input  type="text" name="dia" required="" placeholder="dia"> 
		<input  type="text" name="mes" required="" placeholder="mes"> 
		<input  type="text" name="año" required="" placeholder="año"> 

		<button type="submit" name="Guardar">Guardar</button>
	
	</form>
</body>
</html>
<script>
	function alert(){
	 Swal.fire({
	  title: 'examen Profesional',
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
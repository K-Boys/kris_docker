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


		<div id="barra" align="center">
	
		<ul>
 <li><a  href="index.php">Inicio</a></li>
  <li ><a  href="formulario_titulado.php">Ingresar Nuevo titulado</a></li>
   <li><a class="active" href="formulario_carrera.php">Nueva Carrera</a></li>
    <li><a  href="formulario_estado.php">Nuevo estado</a></li>
     <li><a  href="formulario_bachillerato.php">Nuevo bachillerato</a></li>



  <li id="derecha"><a onclick="sesion()" > cerrar sesión</a></li>
</ul>
	</div>	

<br>	

<a href="index.php"><img id="logout" src ="css/logout.png"></a>

	<form action="insertar_carrera.php" 
	method="POST" enctype="multipart/form-data">

		<h2>Registrar Nueva Carrera</h2>
		Nombre: <br>
		<input onkeyup=»javascript:this.value=this.value.toUpperCase();  type="text" name="nombre_carrera" required="" placeholder="Nombre Carrera"> 

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

<script type="text/javascript">
					function sesion(){	
					Swal.fire({
				  title: 'SEGURO QUE QUIERES CERRAR SESIÓN?',
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: ' blue',
				  cancelButtonColor: 'red',
				  confirmButtonText: 'SI, CERRAR SESIÓN',
				  cancelButtonText: 'CANCELAR'
					}).then((result) => {
				 if (result.isConfirmed) {
				    window.location='cerrar_sesion.php';
				 }else{Swal.fire('NO CERRASTE SESIÓN', '', 'info')}
})	
	}
</script>
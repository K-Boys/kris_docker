<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>

 <?php
require_once("clases/clases_estado.php");
$estado=new Estado();
$registros=$estado->mostrar();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<script src="sweetalert/sweetalert2@11.js"></script>
<body align="center">

 	<div id="barra" align="center">
	
		<ul>
 <li><a  href="index.php">Inicio</a></li>
  <li ><a  href="formulario_titulado.php">Ingresar Nuevo titulado</a></li>
   <li><a  href="formulario_carrera.php">Nueva Carrera</a></li>
    <li><a  href="formulario_estado.php">Nuevo estado</a></li>
     <li><a class="active" href="formulario_bachillerato.php">Nuevo bachillerato</a></li>



  <li id="derecha"><a onclick="sesion()" > cerrar sesión</a></li>
</ul>
	</div>	

	<br>	
<div align="center">	<a href="index.php"><img id="logout" src ="css/logout.png"></a></div>



 
	
	<form  action="insertar_bachillerato.php" 
	method="POST" enctype="multipart/form-data">
		<h2>Nombre de la institución</h2>
		Nombre: <br>
		<input style="text-transform:uppercase;" type="text" name="nombre_bachillerato" required=""> <br>
		Estado:<br>
		<select name="fk_estado" required="">
			<option value="">Selecciona el estado</option>
			<?php
				while($fila=mysqli_fetch_array($registros)){
			?>
				<option value="<?=$fila['pk_estado']?>"><?=$fila["nombre_estado"]?></option>
			<?php
				}
			?>
		</select>
	<br><br>
		<button type="submit" name="guardar">Guardar</button>
	
	</form>
	
	</form>
</body>
</html>

<script>
	function alert(){
	 Swal.fire({
	  title: 'REGISTRO BACHILLERATO',
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
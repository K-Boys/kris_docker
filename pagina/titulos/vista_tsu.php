<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>


<?php 
$pk_titulado=$_GET["pk_titulado"];

require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$registros=$titulado->mostrar($pk_titulado);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/diseño.css">

</head>
<body align="center">
	<form action="insertar_titulado.php" 
	method="POST" enctype="multipart/form-data">
		
			<?php
				while($fila=mysqli_fetch_array($registros)){
			?>
				<h3>Nombre:</h3>   			 <?=$fila["nombre"]?>	
				<h3>Apellido Paterno:</h3> 	 <?=$fila["ap"]?>	
				<h3>Apellido Materno:</h3>	 <?=$fila["am"]?>	
				<h3>Curp:</h3>				 <?=$fila["curp"]?>	
				<h3>Sexo:</h3>				 <?=$fila["sexo"]?>	
				<h3>Nacionalidad:</h3>  	 <?=$fila["nacionalidad"]?>	
				<h3>Bachillerato:</h3>	 	 <?=$fila["nombre_bachillerato"]?>	
				<h3>carrera:</h3>		 	 <?=$fila["nombre_carrera"]?>	
				<h3>Periodo Bachillerato</h3><?=$fila["periodo_bachillerato"]?>	
				<h3>Periodo TSU:</h3>		 <?=$fila["periodo_tsu"]?>	
				
			<?php
				}
			?>
		</select>
		

		 <br><br>
	<br><br>

	<input type="submit" name="guardar" value="Guardar" > 
	</form>
	
	</form>
</body>
</html>
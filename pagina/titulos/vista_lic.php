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
$datos=$titulado->buscarPorId($pk_titulado);

while ($fila=mysqli_fetch_array($datos)){
 
 $resultado=$titulado->mostrar2($pk_titulado);
$resultado2=$titulado->mostrar();


 if ($resultado) {
 	echo "";
 }else{
 	echo "Error!";
 }
 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/diseño.css">

</head>
<body align="center">

<div>
	<form action="actualizar_licen.php" method="POST" enctype="multipart/form-data">

		<input value="<?=$fila['pk_titulado']?>" type="hidden" name="pk_titulado">
		
		<h3> Periodo de licenciatura:</h3> <br>
		<input value="<?=$fila['periodo_licenciatura']?>" required="" type="text" name="periodo_licenciatura"> <br><br>

		<input type="submit" value="Guardar y Cambiar" name="Guardar y cambiar">
	
	</form>
</div>		
<div>
	<form action="actualizar_licen.php" method="POST" enctype="multipart/form-data">

		<input value="<?=$fila['pk_examen_prof']?>" type="hidden" name="pk_examen_prof">
		
		<h3> Fecha de Exmamen Profesional:</h3> <br>
		<input value="<?=$fila['dia']?>" required="" type="number" name="dia"> 
		<input value="<?=$fila['mes']?>" required="" type="text" name="mes"> <br><br>
		<input value="<?=$fila['año']?>" required="" type="number" name="año"> <br><br>

		<input type="submit" value="Guardar y Cambiar" name="Guardar y cambiar">
	
	</form>
</div>		
		
	<div>
		<form action="clases/clases_titulado.php" method="_GET" enctype="multipart/form-data">
		
			<?php
				while($fila=mysqli_fetch_array($resultado)){
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
<?php 
}
 ?>
			
		</form>
</div>

<div>
	<form action="actualizar_licen.php" method="POST" enctype="multipart/form-data">

		<input value="<?=$fila['pk_titulado']?>" type="hidden" name="pk_titulado">
		
		Periodo de licenciatura: <br>
		<input value="<?=$fila['periodo_licenciatura']?>" required="" type="text" name="periodo_licenciatura"> <br><br>

		<input type="submit" value="Guardar y Cambiar" name="Guardar y cambiar">
	
	</form>
</div>		
		



</body>
</html>

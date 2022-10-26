<?php 
$pk_titulado=$_GET["pk_titulado"];

require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$datos=$titulado->buscarPorId($pk_titulado);

while ($fila=mysqli_fetch_array($datos)){
 

require_once("clases/clases_carrera.php");
$carrera=new Carrera();
$registrosss=$carrera->mostrar();
?>

<?php
require_once("clases/clases_bachillerato.php");
$bachillerato=new Bachillerato();
$registross=$bachillerato->mostrar();
?>

<?php
require_once("clases/clases_categoria.php");
$categoria=new Categoria();
$registros=$categoria->mostrar();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
</head>
<body align="">


<div class="contain">
<div class="wrapper">	
<div class="form">	
	<form  action="actualizar_titulado.php" method="POST" enctype="multipart/form-data">
		
		<h3>Modificar datos del Titulado</h3>
		<input value="<?=$fila['pk_titulado']?>" type="hidden" name="pk_titulado">
<p>
		<label> Nombre:	</label> 
		<input value="<?=$fila['nombre']?>" type="text" name="nombre"> 
</p>
<p>	
		<label>Apellido paterno:</label>
		<input value="<?=$fila['ap']?>" type="text" name="ap"> 
</p>
<p>	
		<label>Apellido materno:	</label>  
		<input value="<?=$fila['am']?>" type="text" name="am">
</p>
<p>	
		<label>curp: 	</label> 
		<input value="<?=$fila['curp']?>" type="text" name="curp">
</p>
<p>	
		<label> Sexo: 	</label>
		<input value="<?=$fila['sexo']?>" type="text" name="sexo"> 
</p>
<p>	
		<label>Nacionalidad:	</label>  
		<input value="<?=$fila['nacionalidad']?>" type="text" name="nacionalidad"> 
</p>
<p>
		<label>Periodo de bachillerato: 	</label> 
		<input value="<?=$fila['periodo_bachillerato']?>" type="text" name="periodo_bachillerato"> 
</p>
<p>	
		<label>Periodo de tsu:	</label>  
		<input value="<?=$fila['periodo_tsu']?>"  type="text" name="periodo_tsu"> 
</p>
<p>	
		<label>Periodo de licenciatura:	</label>  
		<input value="<?=$fila['periodo_licenciatura']?>" type="text" name="periodo_licenciatura"> 
</p>

<p>	
	<label>Bachillerato:</label> 
		<select name="fk_bachillerato">
			<option value="">Selecciona el bachillerato</option>
			<?php
				while($fila=mysqli_fetch_array($registross)){
			?>
		<option selected="<?=$fila['pk_bachillerato']?>" value="<?=$fila['pk_bachillerato']?>"><?=$fila["bachillerato"]?></option>
			<?php
				}
			?>
		</select>
	</p>	
				
	<p>		
	<label>	Carrera:</label> 
			<select name="fk_carrera">
			<option value="">Selecciona la carrera</option>
			<?php
				while($fila=mysqli_fetch_array($registrosss)){
			?>
			<option selected="<?=$fila['pk_carrera']?>" value="<?=$fila['pk_carrera']?>"><?=$fila["nombre_carrera"]?></option>
			<?php
				}
			?>
		</select>
</p>
<p>	
	<label>Categoría:	</label> 
		<select name="fk_categoria">
			<option value="">Selecciona la categoría</option>
			<?php
				while($fila=mysqli_fetch_array($registros)){
			?>
			<option selected="<?=$fila['pk_categoria']?>" value="<?=$fila['pk_categoria']?>"><?=$fila["nombre_cat"]?></option>
			<?php
				}
			?>
		</select>
	</p>
	<br>	
	<br>	
	<div align="center"><button type="submit" value="Guardar y Cambiar">Modificar	</button></div>

	
	</form>
		</div>
		</div>
		</div>
</body>
</html>
<?php 
}
 ?>
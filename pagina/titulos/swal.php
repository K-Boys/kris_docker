<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>

<?php
require_once("clases/clases_carrera.php");
$carrera=new Carrera();
$registros=$carrera->mostrar();

require_once("clases/clases_bachillerato.php");
$bachillerato=new Bachillerato();
$registros_bachi=$bachillerato->mostrar();

require_once("clases/clases_categoria.php");
$categoria=new Categoria();
$registros_cat=$categoria->mostrar();

require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$registrotit=$titulado->mostrar();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
</head>
<script src="sweetalert/sweetalert2@11.js"></script>
<body align="">










 
<img id="logout" src ="css/logout.png"><br>

	<a href="formulario_carrera.php"><input onclick="return ()" type="submit" name="" value="Ingresar Nueva Carrera" ></a><br><br>
	<a href="formulario_estado.php"><input onclick="return ()" type="submit" name="" value="Ingresar Nuevo Estado" ></a><br><br>
	<a href="formulario_bachillerato.php"><input onclick="return ()" type="submit" name="" value="Ingresar Nueva Institucion de Bachillerato" ></a>
	<br>	
	<br>	

	<div class="contain">
	 <div class="wrapper">
	<div class="form">
		
	<form id="titulado" action="insertar_titulado.php" 
	method="POST" enctype="multipart/form-data">

	<h3>REGISTRAR NUEVO ALUMNO</h3>	<br>	

	<p>
		<label>Nombre:</label>
		<input  type="text" name="nombre" required=""  placeholder="Ingresa Nombre"> 
	</p>
	<p>	
		<label>Sexo:</label>
		<select name="sexo" required="">
			<option value="">Seleccione Un Género</option> 
			<option value="F">Femenino</option> 
			<option value="M">Masculino</option>
		</select> 
	</p>
	<p>
		<label>Apellido paterno:</label> 
		<input type="text" name="ap" required=""  placeholder="Ingresa Apellido del Padre">
	</p>
	<p>
		<label>Bachillerato: </label> 
		<select name="fk_bachillerato" required="">
			<option value="">Selecciona el bachillerato</option>
			<?php
				while($fila=mysqli_fetch_array($registros_bachi)){
			?>
			<option value="<?=$fila['pk_bachillerato']?>"><?=$fila["bachillerato"]?></option>
			<?php
				}
			?>
		</select>
	</p>
	<p>
		<label>Apellido materno:</label> 
		<input type="text" name="am" placeholder="Ingresa Apellido de la Madre"> 
	</p>
	<p>
		<label>Carrera</label> 
		<select name="fk_carrera" required="">
					<option value="">Selecciona la carrera</option>
					<?php
						while($fila=mysqli_fetch_array($registros)){
					?>
					<option value="<?=$fila['pk_carrera']?>"><?=$fila["nombre_carrera"]?></option>
					<?php
						}
					?>
		</select>
	</p>		
	<p>
		<label>CURP:</label> 	
		<input type="text" name="curp" required="" placeholder="CURP del Alumno"> 
	</p>	
	
	<p>		
		<label>Nacionalidad:</label>  
		<input type="text" name="nacionalidad" required="" value="MÉXICO"  placeholder="Nacionalidad del Alumno"> 
	</p>
	
	
	<p hidden="">
		<label>Categoría:</label> 
				<select name="fk_categoria" required="">
					<option value="">Selecciona la categoría</option>
					<?php
						while($fila=mysqli_fetch_array($registros_cat)){
					?>
					<option value="<?=$fila['pk_categoria']?>"><?=$fila["nombre_cat"]?></option>
					<?php
						}
					?>
				</select>
	</p>
	<br>	
	<p>
		<label>Periodo de Bachillerato:</label> 
		<input type="text" name="periodo_bachillerato"  placeholder="XXXX-XXXX">

</p>

<p>
		<label>Periodo de TSU:</label>
		<input type="text" name="periodo_tsu"  placeholder="XXXX-XXXX" >
</p>
<br><br>



		<input type="text" name="periodo_licenciatura"  hidden="" placeholder="XXXX-XXXX" >
		<div align="center">	
		<button   type="submit">Guardar</button></div>
		<a href="insertar_titulado" ><input type="submit" name=""></a>
	</form>
	
	</div>
	</div>
	</div>

<br>	<br>	

<div class="contain">
<div class="wrapper">	

		<div id="form">
		<h3>Titulado</h3>
		Folio:
		<input type="" name="folio">
		<br>
		Libro:
		<input type="" name="libro">
		<br>
		Foja:
		<input type="" name="foja">


<form action="insertar_examen.php">	
		Examen Profesional:<br>
		<input type="" name="dia"  placeholder="Día">
		<br>
		<input type="" name="mes"  placeholder="Mes">
		<br>
		<input type="" name="año"  placeholder="Año">

		<input type="submit" name="">
		
</form>


		</div>
		</div>	
		</div>
	<div>
		
</div>
</body>
</html>


<script>
	function alert(){
	 Swal.fire({
	  title: 'Registro Titulado',
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
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

require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$registroes=$titulado->mostrares();


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/diseño.css">
</head>
<script src="sweetalert/sweetalert2@11.js"></script>
<body align="">

 	
	
<ul>
	 <li><a  href="index.php">Inicio</a></li>
  	 <li ><a class="active" href="formulario_titulado.php">Ingresar Nuevo titulado</a></li>
 	 <li><a  href="formulario_carrera.php">Nueva Carrera</a></li>
   	 <li><a  href="formulario_estado.php">Nuevo estado</a></li>
     <li><a  href="formulario_bachillerato.php">Nuevo bachillerato</a></li>
  	<li id="derecha"><a onclick="sesion()" > cerrar sesión</a></li>
</ul>
	
	<br>	










 <div align="center"> <a  href="index.php"><img id="logout" src ="css/logout.png"></a><br>	</div>


	<br>	
	<br>

	
	<div class="contain">
	<div class="wrapper">
	<div class="form">
		
	<form id="titulado" action="clases/estruc.php" 
	method="POST" enctype="multipart/form-data">

	<h3>REGISTRAR NUEVO ALUMNO</h3>	<br>	

	<p>
		<label>Nombre:</label>
		<input  type="text" name="nombre" required=""  placeholder="Ingresa Nombre"> 
	</p>
	<p>	
		<label>Sexo:</label>
		<select name="sexo" required="">
			<option value="">Seleccione un Género</option> 
			<option value="F">Femenino</option> 
			<option value="M">Masculino</option>
		</select> 
	</p>

		<p>	
		<label>LIcenciatura:</label>
		<select name="fk_categoria" required="">
			<option value="">Seleccione uan opción</option> 
			<option value="1">LICENCIADO</option> 
			<option value="2">LICENCIADA</option>
		</select> 
	</p>

	<p>
		<label>Apellido paterno:</label> 
		<input type="text" name="ap" required=""  placeholder="Ingresa Apellido Paterno">
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
		<label>Apellido Materno:</label> 
		<input type="text" name="am" placeholder="Ingresa Apellido Materno"> 
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
	
	<p>
		<label>Institucion del TSU:</label>
		<input type="text" name="lic_inst"  placeholder="Nombre de la institucion" >
</p>

		
	<p>
		<label>Periodo de Bachillerato:</label> 
		<input type="text" name="periodo_bachillerato"  placeholder="XXXX-XXXX">

</p>

<p>
		<label>Periodo de TSU:</label>
		<input type="text" name="periodo_tsu"  placeholder="XXXX-XXXX" >
</p>



<p>
	<label>Periodo Licenciatura</label>
		<input type="text" name="periodo_licenciatura"   placeholder="XXXX-XXXX" >
</p>

<p>
		<label>Estado:</label>
<select name="fk_estado">
			<option value="">Selecciona el Estado</option>
			<?php
				while($fila=mysqli_fetch_array($registroes)){
			?>
			<option  value="<?=$fila['pk_estado']?>"><?=$fila["nombre_estado"]?></option>
			<?php
				}
			?>
		</select>


</p>

<p>	</p>

<p>	</p>
<h3>Titulo</h3>

<br>	


	

	<p>
		<label>folio:</label>
		<input   type="text" name="folio2"  >
</p>

<p>
		<label>libro:</label>
		<input type="text" name="libro2"   >
</p>

<p>
		<label>foja:</label>
		<input type="text" name="foja2" >
</p>
	



<p>
		<label>dia:</label>
		<input   type="text" name="dia"  >
</p>

<p>
		<label>mes:</label>
		<input type="text" name="mes"   >
</p>

<p>
		<label>año:</label>
		<input type="text" name="año" >
</p>
<br>	




<div align="center">	
		<p>
		<button   type="submit">Guardar</button>
		</p>	
</div>

	</form>
	
	</div>
	</div>
	</div>
<br>	

		

</body>
</html>


<script>
	function alert(){
	 Swal.fire({
	  title: 'REGITRO TITULADO',
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
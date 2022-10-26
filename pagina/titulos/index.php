<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
	header("location: inicio_sesion.php");
}
 ?>

<?php 
require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$registros=$titulado->mostrar();
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Lista de alumnos</title>
 	<link rel="stylesheet" type="text/css" href="css/css.css">
	 
 	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/dataTables.bootstrap4.min.css">

 	<script src="jquery/jquery-3.5.1.js"></script>
	<script src="jquery/jquery.dataTables.min.js"></script>
	<script src="jquery/dataTables.bootstrap4.min.js"></script>
	<script src="sweetalert/sweetalert2@11.js"></script>

 </head>
 <body>



 	<div align="center">
		<ul>
  <li><a class="active" href="index.php">Inicio</a></li>
  <li><a href="index_lic.php">inactivos</a></li>
  <li ><a href="formulario_titulado.php">Ingresar Nuevo titulado</a></li>
  <li id="derecha"><a onclick="sesion()" > cerrar sesión</a></li>
		</ul>

	</div>

 <img src="css/logo1.png">

<div id="busca">

<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>

</div>	



<div style="width:98%"   id="tabla">

<table id="example" class="table table-striped table-bordered" >
        <thead>

            <tr>
              <th>Nombre</th>
 				<th>Apellido Paterno</th>
 				<th>Apellido Materno</th>
 				<th>CURP</th>
 				<th>Sexo</th>
 				<th>Carrera</th>
 				<th>Periodo TSU</th>
 				<th>Opciones</th>
 				<th>Generar PDF</th>
 				
 				
            </tr>
        </thead>
        <tbody>
        	<?php 

 					while($fila=mysqli_fetch_array($registros))
 					 {
 				?>
 					<tr>
 						<td><?=$fila["nombre"]?>
 						</td>
 						<td><?=$fila["ap"]?>
 						</td>
 						<td><?=$fila["am"]?> 			
 						</td>
 						</td>
 						<td><?=$fila["curp"]?> 		
 						</td>
 						<td><?=$fila["sexo"]?>			
 						</td>
 						<td><?=$fila["nombre_carrera"]?>
 						</td>
 						<td><?=$fila["periodo_tsu"]?>

 						</td>
 				
 						<td>
 							
 							<a href="baja_titulado.php?pk_titulado=<?=$fila['pk_titulado']?>"><input onclick="() " type="submit" name="baja" value="Baja" ></a>

 							<a href="editar_titulado.php?pk_titulado=<?=$fila['pk_titulado']?>"><input type="submit" name="editar" value="Editar" ></a>
 							
 						</td>
 						<td>
 						<a hidden="" href="mostrar.php?pk_titulado=<?=$fila['pk_titulado']?>"><input type="submit" name="tsu" value="TSU" ></a>
 							<a hidden="" href="vista_lic.php?pk_titulado=<?=$fila['pk_titulado']?>"><input type="submit" name="lic" value="LIC" ></a>
 							<a href="ver_pdf.php?pk_titulado=<?=$fila['pk_titulado']?>"><input type="submit" name="lic" value="PDF" ></a>
 							<a href="ver_pdf_trasera.php?pk_titulado=<?=$fila['pk_titulado']?>"><input type="submit" name="lic" value="PDF-trasera" ></a>
 						</td>
 						</td>

 					</tr>
 				<?php  		
 					}
 				 ?>
        </tbody>
       
    </table>

</div>






 </body>
 </html>



 
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

<script type="text/javascript">
					function baja2(){	
					Swal.fire({
				  title: 'Seguro que quieres cerrar sesion?',
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: 'black',
				  cancelButtonColor: 'red',
				  confirmButtonText: 'Si, cerrar sesion'
					}).then((result) => {
				 if (result.isConfirmed) {
				    window.location='cerrar_sesion.php';
				 }else{Swal.fire('No cerraste sesion', '', 'info')}
})	
	}
</script>



<script type="text/javascript">
		function baja(){	
		Swal.fire({
	  title: 'Seguro que quieres darlo de alta?',
	  text: "daras de baja a este alumno",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Si, dar de baja'
		}).then((result) => {
	  if (result.isConfirmed) {
	    window.location='baja_titulado.php?pk_titulado=<?=$fila['pk_titulado']?>';
	  }else{Swal.fire('No lo diste de baja', '', 'info')}
		})	
		}
</script>

<script>
	function alerta2(){
	 Swal.fire({
	   title: '¡GUARDADO!',
	   text: 'ESTO ES UN MENSAJE DE GUARDADO',
	   type: 'success',
	 }).then((result) => {
	  if (result.isConfirmed) {
	    window.location='index.php';
	  }
		})	
		}
	     alerta();                   
</script>

	
<script>
	function alerta(){
	swal({
	   title: '¡ERROR!',
	   text: 'Esto es un mensaje de error',
	   type: 'error',
	 });
	}
	alerta();                   
</script>


<script>
	function alert(){
	 Swal.fire({
	  title: 'Bienvenido',
	  icon: 'success',
	  showCancelButton: false,
	   showConfirmButton: false,
	   position: 'top-end',
	  timer:'1500'
	 })	
		} alert()
                       
</script>

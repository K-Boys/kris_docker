<?php 
$pk_titulado=$_GET["pk_titulado"];
 
 require_once("clases/clases_titulado.php");

 $titulado=new Titulado();

 $resultado=$titulado->mostrar3($pk_titulado);

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
 <body>



<div class="contain"><div class="wrapper"><div class="form">

 	<h1>TECNICO SUPERIOR UNIVERSITARIO</h1>
<form action="clases/clases_titulado.php">
	
	<?php
				while($fila=mysqli_fetch_array($resultado)){
			?>
				<p>Nombre:</p>   		
				<p> <?=$fila["nombre"]?></p>

				<p>Apellido Paterno:</p> 	 
				<p><?=$fila["ap"]?>	</p>

				<p>Apellido Materno:</p>	
				<p> <?=$fila["am"]?></p>	

				<p>Curp:</p>				 
				<p><?=$fila["curp"]?></p>	

				<p>Sexo:</p>				
				<p><?=$fila["sexo"]?></p>	

				<p>Nacionalidad:</p>  	
				<p><?=$fila["nacionalidad"]?></p> 	

				<p>Bachillerato:</p>	 
				<p><?=$fila["nombre_bachillerato"]?>	</p> 

				<p>carrera:</p>		 
				 <p><?=$fila["nombre_carrera"]?>	</p>

				<p>Periodo Bachillerato</p>	
				<p><?=$fila["periodo_bachillerato"]?>	</p>

				<p>Periodo TSU:</p>
				<p><?=$fila["periodo_tsu"]?></p> 	



			<?php
				}
			?>
		

</form>
</div>
</div>
</div>


 </body>
 </html>
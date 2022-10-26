<?php 
include 'clases/conexion2.php';

if (!isset($_POST["buscar"])) {
	$_POST['buscar']="";
	$buscar=$_POST['buscar'];
}
 

$buscar= $_POST['buscar'];

$SQL_READ = "SELECT t.*, nombre_carrera FROM titulado t inner join carrera c ON t.fk_carrera=c.pk_carrera WHERE  nombre LIKE '%".$buscar."%' OR ap LIKE '%".$buscar."%' OR am LIKE '%".$buscar."%' OR nacionalidad LIKE '%".$buscar."%' OR curp LIKE '%".$buscar."%' OR nombre_carrera LIKE '%".$buscar."%' ";

$sql_query= mysqli_query($conn,$SQL_READ);

 ?>
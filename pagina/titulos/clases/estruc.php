<?php

require_once("conexion2.php");


$nombre=strtoupper($_POST["nombre"]);
$ap=strtoupper($_POST["ap"]);
$am=strtoupper($_POST["am"]);
$sexo=$_POST["sexo"];
$nacionalidad=strtoupper($_POST["nacionalidad"]);
$curp=strtoupper($_POST["curp"]);
$periodo_bachillerato=$_POST["periodo_bachillerato"];
$periodo_tsu=$_POST["periodo_tsu"];
$periodo_licenciatura=$_POST["periodo_licenciatura"];
$lic_inst=strtoupper($_POST["lic_inst"]);
$fk_bachillerato=$_POST["fk_bachillerato"];
$fk_carrera=$_POST["fk_carrera"];
$fk_estado=$_POST["fk_estado"];


$consulta="INSERT INTO titulado VALUES ('{$nombre}', '{$ap}', '{$am}', '{$sexo}', '{$nacionalidad}', '{$curp}','{$periodo_bachillerato}', '{$periodo_tsu}','{$periodo_licenciatura}', '{$lic_inst}', '{$fk_bachillerato}', '{$fk_carrera}','{$fk_estado}')";

$sql_query= mysqli_query($conn, $consulta);




?>
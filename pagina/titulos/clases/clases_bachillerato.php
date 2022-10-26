<?php
class Bachillerato{
	
	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();
	}
	function insertar($nombre_bachillerato, $fk_estado){
		$consulta="INSERT INTO bachillerato (pk_bachillerato, nombre_bachillerato, fk_estado) 
		VALUES (NULL, '{$nombre_bachillerato}','{$fk_estado}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}

function mostrar(){
		$consulta="SELECT pk_bachillerato, CONCAT(nombre_bachillerato, ' (', nombre_estado, ')') AS 'bachillerato'
FROM bachillerato b INNER JOIN estado e ON b.fk_estado=e.pk_estado order by nombre_bachillerato ASC";

		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
	function buscarPorId($pk_bachillerato){
		$consulta="SELECT * FROM bachillerato b INNER JOIN estado e ON b.fk_estado=e.pk_estado
			WHERE pk_bachillerato='{$pk_bachillerato}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;	
	}
	function actualizar($nombre_bachillerato, $fk_estado, $pk_bachillerato){
		$consulta="UPDATE bachillerato SET nombre_bachillerato='{$nombre_bachillerato}', fk_estado='{$fk_estado}'
			WHERE pk_bachillerato='{$pk_bachillerato}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}
 ?>
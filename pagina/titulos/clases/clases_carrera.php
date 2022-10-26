<?php
class Carrera {

	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();

	}

		function insertar($nombre_carrera){
		$consulta="INSERT INTO carrera (pk_carrera, nombre_carrera, estatus) 
			VALUES (NULL, '{$nombre_carrera}', 1)";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}

	function insertar2($nombre_carrera, $nombre_estado){
		$consulta="
			INSERT INTO carrera (pk_carrera, nombre_carrera, estatus) 
			VALUES (NULL, '{$nombre_carrera}', 1)
			
			INSERT INTO estado (pk_estado, nombre_estado) 
			VALUES (NULL, '{$nombre_estado}')";

		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}




	function mostrar(){
		$consulta="SELECT * FROM carrera WHERE estatus= 1 ORDER BY nombre_carrera ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($pk_carrera){
		$consulta="SELECT * FROM carrera WHERE pk_carrera='{$pk_carrera}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function actualizar($nombre_carrera, $estatus, $pk_carrera){
		$consulta="UPDATE carrera SET nombre_carrera='{$nombre_carrera}' WHERE
			pk_carrera='{$pk_carrera}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function baja($pk_carrera){
		$consulta="UPDATE carrera SET estatus=0 WHERE pk_carrera='{$pk_carrera}'";
		$resultad=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function eliminar($pk_carrera){
		$consulta="DELETE FROM carrera WHERE pk_carrera='{$pk_carrera}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}

?>
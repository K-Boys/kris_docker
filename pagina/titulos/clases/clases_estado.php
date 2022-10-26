<?php
class Estado {

	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();

	}

	function insertar($nombre_estado){
		$consulta="INSERT INTO estado (pk_estado, nombre_estado) 
			VALUES(NULL, '{$nombre_estado}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM estado";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($idcarrera){
		$consulta="SELECT * FROM estado WHERE pk_estado='{$pk_estado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function actualizar($nombre_estado, $pk_estado){
		$consulta="UPDATE estado SET nombre_estado='{$nombre_estado}' WHERE
			pk_estado='{$pk_estado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}

?>
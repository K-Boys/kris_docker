<?php
class Categoria {

	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();

	}

	function insertar($nombre_cat){
		$consulta="INSERT INTO categoria (pk_categoria, nombre_cat) 
			VALUES (NULL, '{$nombre_cat}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM categoria";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($pk_categoria){
		$consulta="SELECT * FROM categoria WHERE pk_categoria='{$pk_categoria}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function actualizar($nombre_cat, $pk_categoria){
		$consulta="UPDATE categoria SET nombre_cat='{$nombre_cat}' WHERE
			pk_categoria='{$pk_categoria}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}

?>
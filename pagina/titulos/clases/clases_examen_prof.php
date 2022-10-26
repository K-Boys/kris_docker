<?php
class Examen_prof {

	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();

	}

	function insertar($dia, $mes, $año,$fk_titulo){
		$consulta="INSERT INTO examen_prof (pk_examen_prof, dia, mes, año, fk_titulo) 
			VALUES (NULL, '{$dia}', '{$mes}', '{$año}', '{$fk_titulo}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
function insertar2($dia, $mes, $año){
		$consulta="INSERT INTO examen_prof (dia, mes, año) 
			VALUES (NULL, '{$dia}', '{$mes}', '{$año}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}


	function mostrar(){
		$consulta="SELECT * FROM examen_prof ep INNER JOIN titulo t ON t.pk_titulo=ep.fk_titulo";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($pk_titulo){
		$consulta="SELECT * FROM titulo WHERE pk_titulo='{$pk_titulo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function actualizar($dia, $mes, $año, $fk_titulo, $pk_titulo){
		$consulta="UPDATE examen_prof SET dia='{$dia}', mes='{$mes}', año='{$año}', fk_titulo='{$fk_titulo}' WHERE
			pk_titulo='{$pk_titulo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}

?>
<?php
class Titulo{
	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();
	}
	function insertar($folio, $libro, $foja, $fk_titulado){
		$consulta="INSERT INTO titulo (pk_titulo, folio, libro, foja, fk_titulado) 
		VALUES (NULL, '{$folio}','{$libro}', '{$foja}', '{$fk_titulado}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
	}
	
	function mostrar(){
		$consulta="SELECT * FROM titulo t INNER JOIN titulado tt ON tt.pk_titulado=t.fk_titulado 
		WHERE t.estatus=1"; 
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarPorId($pk_titulo){
		$consulta="SELECT * FROM titulo t INNER JOIN titulado tt ON tt.pk_titulado=t.fk_titulado
			WHERE pk_titulo='{$pk_titulo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;	
	}
	function actualizar($folio, $libro, $foja, $fk_titulado){
		$consulta="UPDATE titulo SET folio='{$folio}', libro='{$libro}', foja='{$foja}', fk_titulado='{$fk_titulado}'
			WHERE pk_titulo='{$pk_titulo}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}
 ?>
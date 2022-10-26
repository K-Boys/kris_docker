<?php 
class Usuario{

	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();
	}

	function buscar($nombre_usuario, $contraseña){
		$consulta="SELECT * FROM usuario WHERE nombre_usuario='{$nombre_usuario}' AND
			contraseña='{$contraseña}' AND estatus=1";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	
}
 ?>

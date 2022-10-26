<?php 
class Vista_tsu{
	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();

		function mostrar(){
		$consulta="SELECT * FROM titulado t 
		INNER JOIN bachillerato b    
		ON b.pk_bachillerato=t.fk_bachillerato 
		INNER JOIN carrera c
		ON c.pk_carrera=t.fk_carrera
		INNER JOIN categoria ct
		ON ct.pk_categoria=t.fk_categoria
		where t.estatus=1";
		
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
}
?>
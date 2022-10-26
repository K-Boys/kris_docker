<?php 
class Titulado{
	function __construct(){
		require_once("conexion.php");
		$this->conexion=new Conexion();

	}
	function insertar($nombre, $ap, $am, $sexo, $nacionalidad, $curp, $periodo_bachillerato, $periodo_tsu, $periodo_licenciatura,$lic_inst, $fk_bachillerato, $fk_carrera, $fk_estado, $folio2, $libro2, $foja2, $fk_categoria)
	{
		$consulta="
		INSERT INTO titulado (pk_titulado, nombre, ap, am, sexo, nacionalidad, curp, periodo_bachillerato, periodo_tsu,  periodo_licenciatura, lic_inst, fk_bachillerato, fk_carrera,fk_estado, estatus, folio2, libro2, foja2,fk_categoria) 
		VALUES (NULL, '{$nombre}', '{$ap}', '{$am}', '{$sexo}', '{$nacionalidad}', '{$curp}','{$periodo_bachillerato}', '{$periodo_tsu}','{$periodo_licenciatura}', '{$lic_inst}', '{$fk_bachillerato}', '{$fk_carrera}','{$fk_estado}', 1,'{$folio2}','{$libro2}','{$foja2}','{$fk_categoria}')
			
		
		";
		
	
		$resultado=$this->conexion->insertarConsulta($consulta);
	 return $resultado;

		

	}
		function insertardos($nombre, $ap, $am, $sexo, $nacionalidad, $curp, 
					$periodo_bachillerato, $periodo_tsu, $periodo_licenciatura, $fk_bachillerato, $fk_carrera, $fk_categoria){
		$consulta="
		INSERT INTO titulado (pk_titulado, nombre, ap, am, sexo, nacionalidad, curp, periodo_bachillerato, periodo_tsu,  periodo_licenciatura, fk_bachillerato, fk_carrera, fk_categoria, estatus) 
		VALUES (NULL, '{$nombre}', '{$ap}', '{$am}', '{$sexo}', '{$nacionalidad}', '{$curp}','{$periodo_bachillerato}', '{$periodo_tsu}', '{$periodo_licenciatura}', '{$fk_bachillerato}', '{$fk_carrera}', '{$fk_categoria}', 1)
		UPDATE titulado set fk_categoria='2' where sexo='F'";
		$resultado=$this->conexion->insertarConsulta($consulta);
		
		return $resultado;

	}


	function insertar5($nombre, $ap, $am, $sexo, $nacionalidad, $curp, $periodo_bachillerato, $periodo_tsu, $periodo_licenciatura,$lic_inst, $fk_bachillerato, $fk_carrera)
	{
		$consulta="
		INSERT INTO titulado (pk_titulado, nombre, ap, am, sexo, nacionalidad, curp, periodo_bachillerato, periodo_tsu,  periodo_licenciatura, lic_inst, fk_bachillerato, fk_carrera, estatus) 
		VALUES (NULL, '{$nombre}', '{$ap}', '{$am}', '{$sexo}', '{$nacionalidad}', '{$curp}','{$periodo_bachillerato}', '{$periodo_tsu}','{$periodo_licenciatura}', '{$lic_inst}', '{$fk_bachillerato}', '{$fk_carrera}', 1)";

		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;

	}

	function insertar2($lic_inst){
		$consulta="INSERT INTO titulado (lic_inst) 
		VALUES ('{$lic_inst}')";
		$resultado=$this->conexion->insertarConsulta($consulta);
		return $resultado;
}
	function mostrar(){
		$consulta="SELECT * FROM titulado t 
		INNER JOIN bachillerato b    
		ON b.pk_bachillerato=t.fk_bachillerato 
		INNER JOIN carrera c
		ON c.pk_carrera=t.fk_carrera
		INNER JOIN estado es 
		ON es.pk_estado=t.fk_estado
		where t.estatus=1";
		
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrares(){
		$consulta="SELECT * FROM estado";
		
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}

		function mostrar2(){
		$consulta="SELECT * FROM titulado t 
		INNER JOIN bachillerato b    
		ON b.pk_bachillerato=t.fk_bachillerato 
		INNER JOIN carrera c
		ON c.pk_carrera=t.fk_carrera

		where t.estatus=0";
		
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
function mostrar3($pk_titulado){
		$consulta="SELECT * FROM titulado t 
		INNER JOIN bachillerato b    
		ON b.pk_bachillerato=t.fk_bachillerato 
		INNER JOIN carrera c
		ON c.pk_carrera=t.fk_carrera
		INNER JOIN categoria ct
		ON ct.pk_categoria=t.fk_categoria
		INNER JOIN estado es
		ON es.pk_estado=b.fk_estado
		INNER JOIN titulo ti
		ON ti.fk_titulado=ti.pk_titulo
		INNER JOIN examen_prof ex
		ON ex.pk_examen_prof=ex.fk_titulo

		where t.estatus=1 and pk_titulado='{$pk_titulado}'";
		
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrar4($pk_titulado){
		$consulta="SELECT * FROM titulado t 
		INNER JOIN bachillerato b    
		ON b.pk_bachillerato=t.fk_bachillerato 
		INNER JOIN carrera c
		ON c.pk_carrera=t.fk_carrera
		INNER JOIN categoria ct
		ON ct.pk_categoria=t.fk_categoria
		INNER JOIN titulo ti
		ON ti.fk_titulado=t.pk_titulado
		INNER JOIN examen_prof ex
		ON ex.pk_examen_prof=ti.pk_titulo
		INNER JOIN estado es
		ON es.pk_estado=b.fk_estado

		";
		
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}


	function buscarPorId($pk_titulado){
		$consulta="SELECT * FROM titulado WHERE pk_titulado='{$pk_titulado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function actualizar($nombre, $ap, $am, $nacionalidad, $curp, $sexo, $periodo_bachillerato, $periodo_tsu, $periodo_licenciatura, $fk_bachillerato, $fk_carrera, $fk_categoria, $pk_titulado){
		$consulta="UPDATE titulado SET nombre='{$nombre}', ap='{$ap}', am= '{$am}', nacionalidad='{$nacionalidad}', curp='{$curp}', sexo='{$sexo}', periodo_bachillerato='{$periodo_bachillerato}', periodo_tsu='{$periodo_tsu}', periodo_licenciatura='{$periodo_licenciatura}', fk_bachillerato='{$fk_bachillerato}', fk_carrera='{$fk_carrera}', fk_categoria='{$fk_categoria}' WHERE
			pk_titulado='{$pk_titulado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
		function actualizar2($periodo_licenciatura,  $pk_titulado){
		$consulta="UPDATE titulado SET  periodo_licenciatura='{$periodo_licenciatura}' WHERE
			pk_titulado='{$pk_titulado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
		function actualizar3($dia,  $mes,$año){
		$consulta="UPDATE examen_prof SET  dia='{$dia}',mes='{$mes}',año='{$año}' WHERE
			pk_examen_prof='{$pk_examen_prof}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function baja($pk_titulado){
		$consulta="UPDATE titulado SET estatus=0 WHERE pk_titulado='{$pk_titulado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function alta($pk_titulado){
		$consulta="UPDATE titulado SET estatus=1 WHERE pk_titulado='{$pk_titulado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function eliminar($pk_titulado){
		$consulta="DELETE FROM titulado WHERE pk_titulado='{$pk_titulado}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}

?>
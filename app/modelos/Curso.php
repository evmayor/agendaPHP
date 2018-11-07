<?php 

class Curso{
	private $db;

	public function __construct(){
		$this->db= new Base;
	}


	public function ObtenerCursos(){
		$this->db->query("select * from curso where curso_tipo =1 and curso_activo = 1");
		$resultado = $this->db->registros();
		return $resultado;
	}
	public function Obteneractividades(){
		$this->db->query("select * from curso where curso_tipo =0 and curso_activo = 1;");
		$resultado = $this->db->registros();
		return $resultado;
	}
	public function obtenerCurso($id){
		$this->db->query("select * from curso where curso_id = :id ;");
		$this->db->bind(":id",$id);
		$resultado = $this->db->registro();
		return $resultado;
	}
	public function obtenerActividad($id){
		$this->db->query("select * from curso where curso_id = :id and curso_tipo = '0';");
		$this->db->bind(":id",$id);
		$resultado = $this->db->registro();
		return $resultado;
	}


	public function agregarCurso($datos){
		$this->db->query("insert into curso(
						  curso_nombre,
						  curso_dia,
						  curso_hora_inicio,
						  curso_tipo,
						  curso_fecha,
						  curso_activo)
						  values(
						  	:curso_nombre,
						  	:curso_dia,
						  	:curso_hora_inicio,
						  	:curso_tipo,
						  	:curso_fecha,
						  	:curso_activo)");

		$this->db->bind(':curso_nombre',$datos['curso_nombre']);
		$this->db->bind(':curso_dia',$datos['curso_dia']);
		$this->db->bind(':curso_hora_inicio',$datos['curso_hora_inicio']);
		$this->db->bind(':curso_tipo',$datos['curso_tipo']);
		$this->db->bind(':curso_fecha',$datos['curso_fecha']);
		$this->db->bind(':curso_activo',$datos['curso_activo']);

		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}

	public function actualizarCurso($datos){
		$this->db->query('UPDATE curso 
						  SET curso_nombre = :curso_nombre,
						      curso_dia = :curso_dia,
						      curso_hora_inicio = :curso_hora_inicio,
						      curso_fecha = :curso_fecha
						      where curso_id = :curso_id');

		$this->db->bind(':curso_id',$datos['curso_id']);
		$this->db->bind(':curso_nombre',$datos['curso_nombre']);
		$this->db->bind(':curso_dia',$datos['curso_dia']);
		$this->db->bind(':curso_hora_inicio',$datos['curso_hora_inicio']);
		$this->db->bind(':curso_fecha',$datos['curso_fecha']);

		if ($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function borrarCurso($datos){
		//$this->db->query('DELETE FROM curso where curso_id=:id');
		$this->db->query('UPDATE curso 
						  SET curso_activo = "0"
						  where curso_id = :curso_id');

		$this->db->bind(':curso_id',$datos['curso_id']);
		if ($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}



}


 ?>
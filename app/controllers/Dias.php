<?php 

class Dias extends Controlador{
	public function index(){
		$datos = array(
			"titulo" => 'dias'
		);
		$this->vista('paginas/dias',$datos);
	}
}


 ?>
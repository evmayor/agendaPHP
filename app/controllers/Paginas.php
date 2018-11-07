<?php 
class Paginas extends Controlador{
	public function index(){
		$datos = array(
			"titulo" => 'Bienvenido a MVC 2'
		);
		$datos2 = array(
			
		);

		$this->vista('paginas/inicio',$datos);
	}
	public function dias(){
		$dato = "hola desde Paginas";
		$this->vista2('paginas/dias',$dato);
	}

}

 ?>
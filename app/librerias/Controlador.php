<?php 


class Controlador{

	public function modelo($modelo){
		require_once '../app/modelos/'.$modelo.'.php';
		return new $modelo;
	}

	public function vista($vista,$datos=array()){
		if (file_exists('../app/vistas/'.$vista.'.php')){
			require_once '../app/vistas/'.$vista.'.php';
		}else{
			die('la vista no existe');
		}
	}	


	public function vista2($vista,$dato){
		if (file_exists('../app/vistas/'.$vista.'.php')){
			require_once '../app/vistas/'.$vista.'.php';
		}else{
			die('la vista no existe');
		}
	}	
}



 ?>
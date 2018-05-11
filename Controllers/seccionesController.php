<?php namespace Controllers;

use Models\Seccion as Seccion;

class seccionesController{
	private $seccion;
	public function __construct(){
		$this->seccion = new Seccion();
	}
	public function index(){
		$datos = $this->seccion->listar();
		return $datos;
	}

	public function agregar(){
		if(!$_POST){

		}else{
			$this->seccion->set("nombre", $_POST['inputNombre']);
			$this->seccion->add();
			header('Location: '.URL."secciones");
		}
	}

	public function editar($id){
		if(!$_POST){
			$this->seccion->set("id", $id);
			$datos[0] = $this->seccion->view();
			return $datos;
		}else{
			$this->seccion->set("nombre", $_POST['inputNombre']);
			$this->seccion->set("id", $id);
			$this->seccion->edit();
			header('Location: '.URL."secciones");
		}
	}

	public function eliminar($id){
		$this->seccion->set("id", $id);
		$this->seccion->delete();
		header('Location: '.URL."secciones");
	}
}

 ?>
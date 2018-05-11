<?php namespace Controllers;
use Models\Estudiante as Estudiante;
use Models\Seccion as Seccion;


class estudiantesController{
	private $estudiante;
	private $seccion;
	public function __construct(){
		$this->estudiante = new Estudiante();
		$this->seccion = new Seccion();
	}

	public function index(){
		$datos = $this->estudiante->listar();
		return $datos;
	}

	public function agregar(){
		if(!$_POST){
			$lista_seccion = $this->seccion->listar();
			$datos[0] = $lista_seccion;
			return $datos;
		}else{
			$permitidos = array("image/jpeg", "image/png", "image/gif","image/jpg");
			$limite = 700;
			if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
				$nombre = time()."_".$_FILES['imagen']['name'];
				$ruta = "Views".DS."template".DS."imagenes".DS."avatars".DS.$nombre;
				move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

				$this->estudiante->set("nombre", $_POST['inputNombre']);
				$this->estudiante->set("edad", $_POST['inputEdad']);
				$this->estudiante->set("promedio", $_POST['inputPromedio']);
				$this->estudiante->set("imagen", $nombre);
				$this->estudiante->set("id_seccion", $_POST['selectSeccion']);
				$this->estudiante->add();
				header('Location: '.URL."estudiantes");
			}
		}
	}

	public function editar($id){
		if(!$_POST){
			$lista_seccion = $this->seccion->listar();
			$datos[0] = $lista_seccion;
			$this->estudiante->set("id", $id);
			$datos[1] = $this->estudiante->view();
			return $datos;
		}else{
			$this->estudiante->set("id", $id);
			$obj = $this->estudiante->view();
			$nombre_imagen = $obj['imagen'];

			if($_FILES['imagen']['type'] != ""){
				$permitidos = array("image/jpeg", "image/png", "image/gif","image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$ruta1 = "Views".DS."template".DS."imagenes".DS."avatars".DS.$nombre_imagen;
					unlink($ruta1);

					$nombre = time()."_".$_FILES['imagen']['name'];
					$ruta = "Views".DS."template".DS."imagenes".DS."avatars".DS.$nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$nombre_imagen = $nombre;
				}
			}

			$this->estudiante->set("nombre", $_POST['inputNombre']);
			$this->estudiante->set("edad", $_POST['inputEdad']);
			$this->estudiante->set("promedio", $_POST['inputPromedio']);
			$this->estudiante->set("imagen", $nombre_imagen);
			$this->estudiante->set("id_seccion", $_POST['selectSeccion']);
			$this->estudiante->set("id", $id);
			$this->estudiante->edit();
			header('Location: '.URL."estudiantes");
		}
	}

	public function eliminar($id){
		$this->estudiante->set("id", $id);
		$this->estudiante->delete();
		header('Location: '.URL."estudiantes");
	}

	public function ver($id){
		$this->estudiante->set("id", $id);
		$datos[0] = $this->estudiante->view();
		return $datos;
	}
}
?>
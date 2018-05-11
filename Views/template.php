<?php namespace Views;
$template = new Template();
class Template{

	public function __construct(){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administración de estudiantes | Códifo Facilito</title>
	<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo URL; ?>">Proyecto</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo URL; ?>">Inicio</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
						<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar Estudiante</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secciones <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo URL; ?>secciones">Listado</a></li>
						<li><a href="<?php echo URL; ?>secciones/agregar">Agregar Seccion</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">C&oacute;digo Facilito</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container-fluid">
	

<?php		
	}

	public function __destruct(){
?>
</div>
<footer class="navbar-fixed-bottom text-center">
	Todos los derechos reservados &copy; 2015 <br>
	David Paico <b>Phinet.com</b>
</footer>

<script src="<?php echo URL; ?>Views/template/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>Views/template/js/bootstrap.min.js"></script>
</body>
</html>
<?php
	}

}

?>
<div class="box-principal">
	<h3 class="titulo">Estudiante<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Perfil Estudiante</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos[0]['imagen'] ?>" class="img-responsive" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-3"><label class="text">Nombre del Estudiante</label></div>
							<div class="col-md-9"><span class="text"><?php echo $datos[0]['nombre'] ?></span></div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3"><label class="text">Edad</label></div>
							<div class="col-md-9"><span class="text"><?php echo $datos[0]['edad'] ?></span></div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3"><label class="text">Promedio:</label></div>
							<div class="col-md-9"><span class="text"><?php echo $datos[0]['promedio'] ?></span></div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3"><label class="text">Seccion:</label></div>
							<div class="col-md-9"><span for="" class="text"><?php echo $datos[0]['nombre_seccion']; ?></span></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
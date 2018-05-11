<div class="box-principal">
	<h3 class="titulo">Editar Estudiante<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Editar Estudiante</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos[1]['imagen'] ?>" class="img-responsive" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputNombre" class="control-label">Nombre del Estudiante</label>
							<input type="text" class="form-control" required="" id="inputNombre" name="inputNombre" value="<?php echo $datos[1]['nombre'] ?>">
						</div>
						<div class="form-group">
							<label for="inputEdad" class="control-label">Edad</label>
							<input type="text" class="form-control" required="" id="inputEdad" name="inputEdad" value="<?php echo $datos[1]['edad'] ?>">
						</div>
						<div class="form-group">
							<label for="inputPromedio" class="control-label">Promedio</label>
							<input type="text" class="form-control" required="" id="inputPromedio" name="inputPromedio" value="<?php echo $datos[1]['promedio'] ?>">
						</div>
						<div class="form-group">
							<label for="selectSeccion" class="control-label">Seccion</label>
							<select id="selectSeccion" name="selectSeccion" class="form-control">
								<option value="0">Seleccione una Seccion</option>
								<?php while($row = mysqli_fetch_array($datos[0])){ ?>
									<?php if($datos[1]['id_seccion'] == $row['id']){ ?>
									<option value="<?php echo $row['id']; ?>" selected=""><?php echo $row['nombre']; ?></option>
									<?php }else{ ?>
									<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="imagen" class="control-label">Imagen</label>
							<input type="file" class="" id="imagen" name="imagen">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="box-principal">
	<h3 class="titulo">Agregar Estudiante<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Agregar un nuevo estudiante</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputNombre" class="control-label">Nombre del Estudiante</label>
							<input type="text" class="form-control" required="" id="inputNombre" name="inputNombre">
						</div>
						<div class="form-group">
							<label for="inputEdad" class="control-label">Edad</label>
							<input type="text" class="form-control" required="" id="inputEdad" name="inputEdad">
						</div>
						<div class="form-group">
							<label for="inputPromedio" class="control-label">Promedio</label>
							<input type="text" class="form-control" required="" id="inputPromedio" name="inputPromedio">
						</div>
						<div class="form-group">
							<label for="selectSeccion" class="control-label">Seccion</label>
							<select id="selectSeccion" name="selectSeccion" class="form-control">
								<option value="0">Seleccione una Seccion</option>
								<?php while($row = mysqli_fetch_array($datos[0])){ ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="imagen" class="control-label">Imagen</label>
							<input type="file" class="" id="imagen" name="imagen" required="">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Registrar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>
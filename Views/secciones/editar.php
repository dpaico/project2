<div class="box-principal">
	<h3 class="titulo">Editar Sección<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Editar una Sección</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputNombre" class="control-label">Descripción</label>
							<input type="text" class="form-control" required="" id="inputNombre" name="inputNombre" value="<?php echo $datos[0]['nombre'] ?>">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>
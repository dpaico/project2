<div class="box-principal">
	<h3 class="titulo">Listado de Estudiantes<hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de Estudiantes</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover" align="center">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Nombres</th>
						<th>Edad</th>
						<th>Promedio</th>
						<th>Seccion</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_array($datos)){?>
						<tr>
							<td><img src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>" alt=""></td>
							<td><a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
							<td><?php echo $row['edad']; ?></td>
							<td><?php echo $row['promedio']; ?></td>
							<td><?php echo $row['nombre_seccion']; ?></td>
							<td>
								<a class="btn btn-warning" href="<?php echo URL; ?>estudiantes/editar/<?php echo $row['id']; ?>">Editar</a>
								<a class="btn btn-danger" href="<?php echo URL; ?>estudiantes/eliminar/<?php echo $row['id']; ?>" onclick="return confirm('¿Deseas eliminarlo?')">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
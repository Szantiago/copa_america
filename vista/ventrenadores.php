<?php include("controlador/centrenadores.php"); ?>


<div class="container-fluid">
	<h1>Insertar entrenador</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombres:</label>
            <input type="text" class="form-control" name="nombredt">       
		</div>

		<div class="form-group col-lg-6">
            <label for="">apellidos:</label>
            <input type="text" class="form-control" name="apellidodt">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">nacionalidad:</label>
            <select name="nacionalidaddt" class="form-control">
				<option value="">Seleccione nacionalidad</option>
				<?php for($i=0 ; $i < count($nacio = $entrenador->consultar_nacionalidad()) ; $i++): ?>
					<option value="<?= $nacio[$i]['idnacionalidad'] ?>"><?= $nacio[$i]['pais'] ?></option>
				<?php endfor ?>
			</select>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">fechanac:</label>
            <input type="date" class="form-control" name="fechanacdt">
		</div>
        <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>

	</form>
	<?php $consultaentrenador = $entrenador->consultar_entrenador(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">entrenador insertado</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre del entrenador</th>
				<th>apellido del entrenador</th>
				<th>nacionalidad del entrenador</th>
				<th>fechanac del entrenador</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaentrenador);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultaentrenador[$i]['nombredt'] ?></td>
					<td><?= $consultaentrenador[$i]['apellidodt'] ?></td>
					<td><?php nombrepais($consultaentrenador[$i]['nacionalidaddt'], $entrenador) ?></td>
					<td><?= $consultaentrenador[$i]['fechanacdt'] ?></td>
					<td><a href="index.php?pag=6&id=<?= $consultaentrenador[$i]['iddt'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="iddteli" value="<?= $consultaentrenador[$i]['iddt'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
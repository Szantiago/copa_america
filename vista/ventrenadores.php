<?php include("controlador/centrenadores.php"); ?>


<div class="row-fluid">
<h1>Ingresar Entrenador</h1>
	<form role="form" name="form1" method="POST" action="">	
		<div class="form-group col-lg-6">
            <label for="">Nombres:</label>
            <input type="text" class="form-control" name="nombredt" pattern="[A-z ]{2,25}" title="Solo se permiten letras máximo 25 caracteres" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Apellidos:</label>
            <input type="text" class="form-control" name="apellidodt" pattern="[A-z ]{2,25}" title="Solo se permiten letras máximo 25 caracteres" required>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Nacionalidad:</label>
            <select name="nacionalidaddt" class="form-control">
				<option value=0>Seleccione nacionalidad</option>
				<?php for($i=0;$i<count($nacionalidaddt2);$i++): ?>
					<option value="<?= $nacionalidaddt2[$i]['idnacionalidad'] ?>"><?= $nacionalidaddt2[$i]['pais'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha Naciemiento:</label>
            <input type="date" class="form-control" name="fechanacdt">
		</div>
        <div class="form-group col-lg-12" center>
            <input type="submit" class="btn btn-success" value="Ingresar">
			<a href="home.php?" class="btn btn-success">Volver</a>
        </div>
	</form>
	<?php $consultaentrenador = $entrenador->consultar_entrenador(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Entrenadores</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre del Entrenador</th>
				<th>Apellido del Entrenador</th>
				<th>Nacionalidad del Entrenador</th>
				<th>Fecha de Nacimiento</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaentrenador);$i++):
				$nacionalidad1 = $entrenador->sel_nacionalidad1($consultaentrenador[$i]['nacionalidaddt'])
			?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultaentrenador[$i]['nombredt']; ?></td>
					<td><?= $consultaentrenador[$i]['apellidodt']; ?></td>
					<td><?= $nacionalidad1[0]['nombrenacio']; ?></td>
					<td><?= $consultaentrenador[$i]['fechanacdt']; ?></td>
					<td><a href="home.php?var=10&id=<?= $consultaentrenador[$i]['iddt'] ?>" class="btn btn-primary">Editar</a></td>
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
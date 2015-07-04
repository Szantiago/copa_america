<?php include("controlador/cpartidos.php"); ?>

<div class="container-fluid">
	<h1>Insertar Partidos</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Equipo Local:</label>
            <input type="text" class="form-control" name="equipolocal">       
		</div>

		<div class="form-group col-lg-6">
            <label for="">Equipo Visitante:</label>
            <input type="text" class="form-control" name="equipovisit">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Horario:</label>
            <input type="text" class="form-control" name="horario">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Local:</label>
            <input type="text" class="form-control" name="marcadorlocal">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Visitante:</label>
            <input type="text" class="form-control" name="marcadorvisit">
		</div>
		

        <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
	</form>
	<?php $consultapartidos = $partidos->consultar_partidos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Partidos insertados</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Equipo Local</th>
				<th>Equipo Visitante</th>
				<th>Horario</th>
				<th>Marcador Local</th>
				<th>Marcador Visitante</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultapartidos);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultapartidos[$i]['equipolocal'] ?></td>
					<td><?= $consultapartidos[$i]['equipovisit'] ?></td>
					<td><?= $consultapartidos[$i]['horario'] ?></td>
					<td><?= $consultapartidos[$i]['marcadorlocal'] ?></td>
					<td><?= $consultapartidos[$i]['marcadorvisit'] ?></td>
					<td><a href="<?= $consultapartidos[$i]['idpartidos'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idpartidoseli" value="<?= $consultapartidos[$i]['idpartidos'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>

<?php include("controlador/cciudades.php"); ?>

<div class="container-fluid">
	<h1>Insertar Ciudades</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre de la Ciudad:</label>
            <input type="text" class="form-control" name="nombreciudad">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Numero habitantes:</label>
            <input type="text" class="form-control" name="numerohab">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">estadio principal:</label>
            <input type="text" class="form-control" name="estadioprinc">       
		</div>

		 <div class="form-city col-lg-6">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
	</form>
	<?php $consultaciudades = $ciudad->consultar_ciudades(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Ciudades insertadas</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre de la Ciudad</th>
				<th>Numero de habitantes</th>
				<th>Estadio principal</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaciudades);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultaciudades[$i]['nombreciudad'] ?></td>
					<td><?= $consultaciudades[$i]['numerohab'] ?></td>
					<td><?= $consultaciudades[$i]['estadioprinc'] ?></td>
					<td><a href="home.php?var=6&id=<?= $consultaciudades[$i]['idciudad'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idciudadeli" value="<?= $consultaciudades[$i]['idciudad'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>

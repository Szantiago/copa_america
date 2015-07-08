<?php include("controlador/cciudades.php"); ?>

<div class="container-fluid">
	<h1>Insertar Ciudades</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre de la Ciudad:</label>
            <input type="text" class="form-control" name="nombreciudad" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Número de Habitantes:</label>
            <input type="text" class="form-control" name="numerohab" pattern="[0-9]{3,11}" title="Solo cifras numericas" placeholder="ej: 125700" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Estadio Principal:</label>
            <input type="text" class="form-control" name="estadioprinc" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required >       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
			 <a href="home.php" class="btn btn-success">Volver</a>
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
				<th>Número de Habitantes</th>
				<th>Estadio Principal</th>
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

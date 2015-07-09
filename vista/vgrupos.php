<?php include("controlador/cgrupos.php"); ?>

<div class="container-fluid">
	<h1>Ingresar Grupos</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del grupo:</label>
            <input type="text" class="form-control" name="nombregrup" pattern="[A-z ]{1,10}" title="Solo se permiten letras máximo 10 caracteres" required>       
		</div>
		 <div class="form-group col-lg-6" center>
			<br>
            <input type="submit" class="btn btn-success" value="Enviar">
			<a href="home.php?" class="btn btn-success">Volver</a>
        </div>
	</form>
	<?php $consultagrupos = $grupos->consultar_grupo(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Grupos</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre del Grupo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultagrupos);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultagrupos[$i]['nombregrup'] ?></td>
					<td><a href="home.php?var=16&id=<?= $consultagrupos[$i]['idgrupo'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idgrupoeli" value="<?= $consultagrupos[$i]['idgrupo'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>

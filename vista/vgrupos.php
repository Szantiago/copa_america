<?php include("controlador/cgrupos.php"); ?>

<div class="container-fluid">
	<h1>Insertar Grupos</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del grupo:</label>
            <input type="text" class="form-control" name="nombregrup">       
		</div>

		 <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
	</form>
	<?php $consultagrupos = $grupos->consultar_grupos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Grupos insertados</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre del grupo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultagrupos);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultagrupos[$i]['nombregrup'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultagrupos[$i]['idgrupo'] ?>" class="btn btn-primary">Editar</a></td>
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

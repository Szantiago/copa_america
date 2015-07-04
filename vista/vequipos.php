<?php 
/* 	Elaborado por: Luis M Morales B
	Vers 3.0 
	30 jun 15
	*/
include("controlador/cequipos.php"); ?>

<div class="container-fluid">
	<h1>Insertar equipos</h1>
	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del equipo:</label>
            <input type="text" class="form-control" name="nombreequipo">       
		</div>
		 <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
	</form>
	<?php $consultaequipos = $equipos->consultar_equipos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="12">equipos insertados</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre del equipo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaequipos);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultaequipos[$i]['nombreequipo'] ?></td>
					<td><a href="index.php?pag=5&id=<?= $consultaequipos[$i]['idequipo'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idequipoeli" value="<?= $consultaequipos[$i]['idequipo'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
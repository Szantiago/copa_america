<?php
	include ("controlador/ctbnacionalidad.php");	
?>
<div class="row-fluid">
<h1>Ingresar Nacionalidad</h1>
	<form role="form" name="form1" method="POST" action="">		
		<div class="form-group col-md-6">
			<label>Pais:</label><br />
			<input name="pais" type="text" class="form-control">
		</div>
		<div class="form-group col-md-6">
			<label>Nacionalidad:</label><br />
			<input name="nombrenacio" type="text" class="form-control">
		</div>
		<div class="form-group col-md-12 center">
            <input type="submit" class="btn btn-success" value="Enviar">
			 <a href="javascript:history.back();" class="btn btn-success">Volver</a>
            <a href="home.php" class="btn btn-success" >Salir</a>
        </div>
	</form>
	<?php $consultanacio = $nacionalidad->consultar_nacionalidad(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Nacionalidades</th>
			</tr>
			<tr>
				<th>Codigo</th>
				<th>Pais</th>
				<th>Nacionalidad</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultanacio);$i++): ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultanacio[$i]['pais'] ?></td>
					<td><?= $consultanacio[$i]['nombrenacio'] ?></td>
					<td><a href="home.php?var=18&id=<?= $consultanacio[$i]['idnacionalidad'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idnacioeli" value="<?= $consultanacio[$i]['idnacionalidad'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
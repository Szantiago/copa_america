<?php
	include ("controlador/ctitulo.php");	
?>
<div class="row-fluid">
<h1>Ingresar Titulo del Entrenador</h1>
	<form role="form" name="form1" method="POST" action="">		
		<div class="form-group col-lg-6">
            <label for="">Titulo Obtenido:</label>
            <input type="text" class="form-control" name="titulo" required>       
		</div>
		<div class="form-group col-md-6">
			<label>Director Técnico:</label><br />
			<select name="iddt" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($iddt2);$i++): ?>
					<option value ="<?= $iddt2[$i]['iddt'] ?>" ><?= $iddt2[$i]['apellidodt'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" required>
		</div>
		<div class="form-group col-md-6 center">
			<br>
            <input type="submit" class="btn btn-success" value="Enviar">
			<a href="home.php?var=9" class="btn btn-success">Volver</a>
        </div>
	</form>
	<?php $consultatitulo = $titulodt->consultar_titulo(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Titulos Obtenidos por los Entrenadores</th>
			</tr>
			<tr>
				<th>Codigo</th>
				<th>Titulo Obtenido</th>
				<th>Director Técnico</th>
				<th>Descripcion</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultatitulo);$i++): 
				$dt = $titulodt->sel_dt1($consultatitulo[$i]["iddt"]);
			?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultatitulo[$i]['titulo']; ?></td>
					<td><?= $dt[0]['apellidodt'] ?></td>
					<td><?= $consultatitulo[$i]['descripcion']; ?></td>
					<td><a href="home.php?var=24&id=<?= $consultatitulo[$i]['idtitulo'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idtituloreli" value="<?= $consultatitulo[$i]['idtitulo'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
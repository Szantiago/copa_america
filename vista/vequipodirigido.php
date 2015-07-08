<?php
	include ("controlador/cequipodirigido.php");	
?>
<div class="row-fluid">
<h1>Ingresar Equipo Dirigido</h1>
	<form role="form" name="form1" method="POST" action="">		
		<div class="form-group col-md-6">
			<label>Equipo Dirigido:</label><br />
			<select name="equipodir" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($equipodir2);$i++): ?>
					<option value ="<?= $equipodir2[$i]['idequipo'] ?>" ><?= $equipodir2[$i]['nomequi'] ?></option>
				<?php endfor; ?>
			</select>
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
            <label for="">Fecha Inicio:</label>
            <input type="date" class="form-control" name="fechaini" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha Final:</label>
            <input type="date" class="form-control" name="fechafin">
		</div>
		<div class="form-group col-md-12 center">
            <input type="submit" class="btn btn-success" value="Enviar">
			<a href="home.php?" class="btn btn-success">Volver</a>
        </div>
	</form>
	<?php $consulta = $equipodirigido->consultar_equipodir(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Equipos Dirigidos</th>
			</tr>
			<tr>
				<th>Codigo</th>
				<th>Equipo Dirigido</th>
				<th>Director Técnico</th>
				<th>Fecha Inicio</th>
				<th>Fecha Final</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consulta);$i++): 
			$equipo = $equipodirigido->sel_equipo1($consulta[$i]["equipodir"]);
			$dt = $equipodirigido->sel_dt1($consulta[$i]["iddt"]);?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $equipo[0]['nomequi'] ?></td>
					<td><?= $dt[0]['apellidodt'] ?></td>
					<td><?= $consulta[$i]['fechaini']; ?></td>
					<td><?= $consulta[$i]['fechafin']; ?></td>
					<td><a href="home.php?var=14&id=<?= $consulta[$i]['idequipodir'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idequipodireli" value="<?= $consulta[$i]['idequipodir'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
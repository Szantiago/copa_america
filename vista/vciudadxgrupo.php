<?php
	include ("controlador/cciudadxgrupo.php");	
?>
<div class="row-fluid">
<h1>Ingresar Ciudad y Grupo</h1>
	<form role="form" name="form1" method="POST" action="">		
		<div class="form-group col-md-6">
			<label>Ciudad:</label><br />
			<select name="idciudad" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($idciudad2);$i++): ?>
					<option value ="<?php echo $idciudad2[$i]['idciudad'] ?>" ><?php echo $idciudad2[$i]['nombreciudad'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label>Grupo:</label><br />
			<select name="idgrupo" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($idgrupo2);$i++): ?>
					<option value ="<?php echo $idgrupo2[$i]['idgrupo'] ?>" ><?php echo $idgrupo2[$i]['nombregrup'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-md-12 center">
            <input type="submit" class="btn btn-success" value="Enviar">
			<a href="home.php" class="btn btn-success">Volver</a>
        </div>
	</form>
	<?php $consultaciudadxgrupo = $ciudadxgrupo->consultar_ciugru(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Ciudades y Grupos</th>
			</tr>
			<tr>
				<th>Codigo</th>
				<th>Ciudad</th>
				<th>Grupo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaciudadxgrupo);$i++): 
			$ciudad = $ciudadxgrupo->sel_ciudad1($consultaciudadxgrupo[$i]["idciudad"]);
			$grupo = $ciudadxgrupo->sel_grupo1($consultaciudadxgrupo[$i]["idgrupo"]);?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $ciudad[0]['nombreciudad'] ?></td>
					<td><?= $grupo[0]['nombregrup'] ?></td>
					<td><a href="home.php?var=8&id=<?= $consultaciudadxgrupo[$i]['idciuxgru'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idciuxgrueli" value="<?= $consultaciudadxgrupo[$i]['idciuxgru'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
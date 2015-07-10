<?php include("controlador/cpartidos.php"); ?>

<script language="javascript">

	window.onload=function() {
    document.getElementById("f1").onsubmit=function () {
      var equi1=document.getElementById("equipolocal").value;
      var equi2=document.getElementById("equipovisit").value;
      if (equi1 == equi2)
      {
        alert('Los equipos son los mismos');
        return false;
      }
      else
        return true;
    }
  }
</script>

<div class="container-fluid">
	<h1>Registrar Partidos</h1>

	<form id="f1" action="" method="POST"">
		<div class="form-group col-lg-6">
            <label for="">Equipo Local:</label>
			<select name="equipolocal" id="equipolocal" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($equipo2);$i++): ?>
					<option value ="<?= $equipo2[$i]['idequipo'] ?>" ><?= $equipo2[$i]['nomequi'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Equipo Visitante:</label>
			<select name="equipovisit" id="equipovisit" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($equipo2);$i++): ?>
					<option value ="<?= $equipo2[$i]['idequipo'] ?>" ><?= $equipo2[$i]['nomequi'] ?></option>
				<?php endfor; ?>
			</select>
			
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Horario:</label>
            <input type="datetime-local" class="form-control" name="horario">
		</div>
		
		<div class="form-group col-md-6">
			<label>Estadio:</label><br />
			<select name="idciudadestadio" class="form-control">
				<option value=0> Seleccione una opcion </option>
				<?php for($i=0;$i<count($ciudadestadio2);$i++): ?>
					<option value ="<?= $ciudadestadio2[$i]['idciudad'] ?>" ><?= $ciudadestadio2[$i]['estadioprinc'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Local:</label>
            <input type="text" class="form-control" name="marcadorlocal">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Visitante:</label>
            <input type="text" class="form-control" name="marcadorvisit">
		</div>
        <div class="form-group col-lg-12" center>
             <input type="submit" class="btn btn-success" value="Ingresar">
			<a href="home.php?" class="btn btn-success">Volver</a>
        </div>
	</form>
	<?php $consultapartidos = $partidos->consultar_partidos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Partidos Registrados</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Equipo Local</th>
				<th>Equipo Visitante</th>
				<th>Horario</th>
				<th>Estadio</th>
				<th>Local</th>
				<th>Visitante</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultapartidos);$i++): 
				$estadio = $partidos->seleccionar_ciudad_id($consultapartidos[$i]["idciudadestadio"]);?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= nombre_equipo($consultapartidos[$i]['equipolocal'], $partidos) ?></td>
					<td><?= nombre_equipo($consultapartidos[$i]['equipovisit'], $partidos) ?></td>
					<td><?= $consultapartidos[$i]['horario']; ?></td>
					<td><?= $estadio[0]['estadioprinc']; ?></td>
					<td><?= $consultapartidos[$i]['marcadorlocal']; ?></td>
					<td><?= $consultapartidos[$i]['marcadorvisit']; ?></td>
					<td><a href="home.php?var=20&id=<?= $consultapartidos[$i]['idpartido'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idpartidoelim" value="<?= $consultapartidos[$i]['idpartido'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>

<?php 
/* 	Elaborado por: Luis M Morales B
	Vers 3.0 
	30 jun 15
	*/
include("controlador/cequipos.php"); ?>

<div class="container-fluid">
	<h1>Ingresar Equipos</h1>
	<form role="form" name="form1" method="POST" action="">	
		<div class="form-group col-lg-6">
            <label for="">Nombre del Equipo:</label>
            <input type="text" class="form-control" name="nomequi" pattern="[A-z ]{2,25}" title="Solo se permiten letras máximo 25 caracteres" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha de Fundación:</label>
            <input type="date" class="form-control" name="fechafund" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Página Web:</label>
            <input type="text" class="form-control" name="paginaweb" >
		</div>
		<div class="form-group col-lg-6">
            <label for="">Ciudad Capital:</label>
            <input type="text" class="form-control" name="ciudadcap" pattern="[A-z ]{2,30}" title="Solo se permiten letras sin puntos máximo 30 caracteres" required>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Grupo:</label>
            <select name="grupo" class="form-control">
				<option value=0>Seleccione grupo</option>
				<?php for($i=0;$i<count($grupo2);$i++): ?>
					<option value="<?= $grupo2[$i]['idgrupo'] ?>"><?= $grupo2[$i]['nombregrup'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Ingresar">
			<a href="home.php?" class="btn btn-success">Volver</a>
        </div>
		
	</form>
	<?php $consultaequipo = $equipos->consultar_equipo(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="12">Equipos</th>
			</tr>
			<tr>
				<th>#</th>
				<th>Nombre del Equipo</th>
				<th>Fecha de Fundación</th>
				<th>Página Web</th>
				<th>Ciudad Capital</th>
				<th>Grupo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaequipo);$i++): 
					$grupo1 = $equipos->sel_grupo1($consultaequipo[$i]['grupo'])
			?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $consultaequipo[$i]['nomequi']; ?></td>
					<td><?= $consultaequipo[$i]['fechafund']; ?></td>
					<td><?= $consultaequipo[$i]['paginaweb']; ?></td>
					<td><?= $consultaequipo[$i]['ciudadcap'] ?></td>
					<td><?= $grupo1[0]['nombregrup']; ?></td>
					<td><a href="home.php?var=12&id=<?= $consultaequipo[$i]['idequipo'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idequipoeli" value="<?= $consultaequipo[$i]['idequipo'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
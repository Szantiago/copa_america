<?php
	include ("controlador/cequipodirigido.php");	
?>
<div class="row-fluid">
<h1>Editar Equipo Dirigido</h1>
	<form action="home.php?var=13&id=<?= $idequipodir ?>" method="POST">
		<div class="form-group col-md-6">
			<label>Equipo Dirigido:</label><br />
			<select name="equipodir" class="form-control">
				<option value="<?= $consultaequipodir[0]['equipodir']  ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($equipodir2);$i++): ?>
					<option value ="<?= $equipodir2[$i]['idequipo'] ?>" ><?= $equipodir2[$i]['nomequi'] ?></option>
				<?php endfor; ?>
			</select>
			<input type="hidden" name="idequipodir" value="<?= $idequipodir ?>">
            <input type="hidden" name="actu" value="actu">    
		</div>
		<div class="form-group col-md-6">
			<label>Director Técnico:</label><br />
			<select name="iddt" class="form-control">
				<option value="<?= $consultaequipodir[0]['iddt']  ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($iddt2);$i++): ?>
					<option value ="<?= $iddt2[$i]['iddt'] ?>" ><?= $iddt2[$i]['apellidodt'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha Inicio:</label>
            <input type="date" class="form-control" name="fechaini" value="<?= $consultaequipodir[0]['fechaini']  ?>"required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha Final:</label>
            <input type="date" class="form-control" name="fechafin" value="<?= $consultaequipodir[0]['fechafin']  ?>">
		</div>
		<div class="form-group col-lg-12 center">
            <input type="submit" class="btn btn-primary" value="Editar">
			<a href="home.php?var=13" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
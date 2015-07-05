<?php include("controlador/centrenadores.php"); ?>

<div class="container-fluid">
	<h1>Editar entrenador</h1>

	<form action="home.php?var=9&id=<?= $identrenador ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del entrenador:</label>
			<input type="text" class="form-control" name="nombredt" value="<?= $consultaedit[0]['nombredt']  ?>">
		</div>	
		<div class="form-group col-lg-6">
			<label for="">Apellido del entrenador:</label>
			<input type="text" class="form-control" name="apellidodt" value="<?= $consultaedit[0]['apellidodt']  ?>">
		</div>
		<div class="form-group col-lg-6">
            <label for="">Nacionalidad:</label> 
			<select name="nacionalidaddt" class="form-control">
				<option value="<?= $consultaedit[0]['nacionalidaddt']  ?>">Seleccione nacionalidad</option>
				<?php for($i=0 ; $i < count($nacionalidad) ; $i++): ?>
					<option value="<?= $nacionalidad[$i]['idnacionalidad'] ?>"><?= $nacionalidad[$i]['pais'] ?></option>
				<?php endfor ?>
			</select>
		</div>
		<div class="form-group col-lg-6">
			<label for="">fecha de nacimiento:</label>
		    <input type="date" name="fechanacdt" class="form-control" value="<?= $consultaedit[0]['fechanacdt']?>">
            <input type="hidden" name="iddt" value="<?= $identrenador ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>
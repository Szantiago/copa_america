<?php include("controlador/centrenadores.php"); ?>

<div class="row-fluid">
<h1>Editar Entrenador</h1>
	<form action="home.php?var=9&id=<?= $iddt ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombres:</label>
			<input type="text" class="form-control" name="nombredt" value="<?= $consultadt[0]['nombredt']  ?>" pattern="[A-z ]{2,25}" title="Solo se permiten letras máximo 25 caracteres" required>
			<input type="hidden" name="iddt" value="<?= $iddt ?>">
            <input type="hidden" name="actu" value="actu">        
		</div>	
		<div class="form-group col-lg-6">
			<label for="">Apellidos:</label>
			<input type="text" class="form-control" name="apellidodt" value="<?= $consultadt[0]['apellidodt']  ?>" pattern="[A-z ]{2,25}" title="Solo se permiten letras máximo 25 caracteres" required>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Nacionalidad:</label> 
			<select name="nacionalidaddt" class="form-control">
				<option value="<?= $consultadt[0]['nacionalidaddt']  ?>">Seleccione nacionalidad</option>
				<?php for($i=0;$i<count($nacionalidaddt2);$i++): ?>
					<option value="<?= $nacionalidaddt2[$i]['idnacionalidad'] ?>"><?= $nacionalidaddt2[$i]['pais'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-lg-6">
			<label for="">fecha de nacimiento:</label>
		    <input type="date" name="fechanacdt" class="form-control" value="<?= $consultadt[0]['fechanacdt']?>">
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Editar">
			<a href="home.php?var=9" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
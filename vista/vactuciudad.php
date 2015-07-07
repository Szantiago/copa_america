<?php include("controlador/cciudades.php"); ?>

<div class="row-fluid">
	<h1>Editar Ciudades</h1>

	<form action="home.php?var=5&id=<?= $idciudad ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre de la Ciudad:</label>
			<input type="text" class="form-control" name="nombreciudad" value="<?= $consultaedit[0]['nombreciudad']  ?>" pattern="[A-z ]{2,50}" title="Solo letras" required>
			<input type="hidden" name="idciudad" value="<?= $idciudad ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Numero de Habitantes:</label>
			<input type="text" class="form-control" name="numerohab" value="<?= $consultaedit[0]['numerohab']  ?>" pattern="[0-9]{3,11}" title="Solo cifras numericas" placeholder="ej: 125700" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Estadio Principal:</label>
			<input type="text" class="form-control" name="estadioprinc" value="<?= $consultaedit[0]['estadioprinc']  ?>" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?var=5" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
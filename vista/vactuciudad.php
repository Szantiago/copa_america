<?php include("controlador/cciudades.php"); ?>

<div class="row-fluid">
	<h1>Editar ciudades</h1>

	<form action="home.php?var=5&id=<?= $idciudad ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre de la ciudad:</label>
			<input type="text" class="form-control" name="nombreciudad" value="<?= $consultaedit[0]['nombreciudad']  ?>">
			<input type="hidden" name="idciudad" value="<?= $idciudad ?>">
            <input type="hidden" name="actu" value="actu">
			<label for="">Numero de habitantes:</label>
			<input type="text" class="form-control" name="numerohab" value="<?= $consultaedit[0]['numerohab']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Estadio principal:</label>
			<input type="text" class="form-control" name="estadioprinc" value="<?= $consultaedit[0]['estadioprinc']  ?>">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>
<?php include("controlador/cnacionalidad.php"); ?>

<div class="container-fluid">
	<h1>Editar nacionalidad</h1>

	<form action="index.php?pag=9&id=<?= $idnacionalidad ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for=""> pais:</label>
			
            <input type="text" class="form-control" name="pais" value="<?= $consultaedit[0]['pais']  ?>">
            <input type="hidden" name="idnacionalidad" value="<?= $idnacionalidad ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>
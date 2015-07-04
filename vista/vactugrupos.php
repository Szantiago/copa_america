<?php include("controlador/cgrupos.php"); ?>

<div class="container-fluid">
	<h1>Editar Grupos</h1>

	<form action="index.php?pag=3&id=<?= $idgrupo ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del grupo:</label>
            <input type="text" class="form-control" name="nombregrup" value="<?= $consultaedit[0]['nombregrup']  ?>">
            <input type="hidden" name="idgrupo" value="<?= $idgrupo ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>
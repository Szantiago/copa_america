<?php include("controlador/cgrupos.php"); ?>

<div class="container-fluid">
	<h1>Editar Grupos</h1>

	<form action="home.php?var=15&id=<?= $idgrupo ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del grupo:</label>
            <input type="text" class="form-control" name="nombregrup" value="<?= $consultagrupoedit[0]['nombregrup']  ?>" pattern="[A-z ]{1,10}" title="Solo se permiten letras máximo 10 caracteres" required>
            <input type="hidden" name="idgrupo" value="<?= $idgrupo ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		<div class="form-group col-lg-6" center>
			<br>
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>
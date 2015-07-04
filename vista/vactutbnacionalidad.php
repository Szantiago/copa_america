<?php
	include ("controlador/ctbnacionalidad.php");	
?>
<div class="row-fluid">
<h1>Editar Nacionalidad</h1>
	<form action="home.php?var=17&id=<?= $idnacionalidad ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Pais:</label>
            <input type="text" class="form-control" name="pais" value="<?= $consultanacioedit[0]['pais']  ?>">
            <input type="hidden" name="idnacionalidad" value="<?= $idnacionalidad ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Nacionalidad:</label>
            <input type="text" class="form-control" name="nombrenacio" value="<?=  $consultanacioedit[0]['nombrenacio'] ?>">
		</div>
        <div class="form-group col-lg-12 center">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>
<?php include("controlador/cpartidos.php"); ?>

<div class="container-fluid">
	<h1>Editar Partidos</h1>

	<form action="index.php<?= $idpartidos ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Equipo Local:</label>
            <input type="text" class="form-control" name="equipolocal" value="<?= $consultaedit[0]['equipolocal']  ?>">
            <input type="hidden" name="idpartidos" value="<?= $idpartidos ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>

		<div class="form-group col-lg-6">
            <label for="">Equipo Visit:</label>
            <input type="text" class="form-control" name="equipovisit" value="<?=  $consultaedit[0]['equipovisit'] ?>">
		</div>

		<div class="form-group col-lg-6">
            <label for="">Horario:</label>
            <input type="text" class="form-control" name="horario" value="<?=  $consultaedit[0]['horario'] ?>">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Id Ciudad Estadio:</label>
            <input type="text" class="form-control" name="idciudadestadio" value="<?=  $consultaedit[0]['idciudadestadio'] ?>">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Local:</label>
            <input type="text" class="form-control" name="marcadorlocal" value="<?=  $consultaedit[0]['marcadorlocal'] ?>">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Visit:</label>
            <input type="text" class="form-control" name="marcadorvisit" value="<?=  $consultaedit[0]['marcadorvisit'] ?>">
		</div>
        <div class="form-group col-lg-6">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
	</form>
</div>

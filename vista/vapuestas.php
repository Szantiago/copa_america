<?php include("controlador/capuestas.php"); ?>

<div class="container-fluid">
	<h1>tbapuestas</h1>
	<form action="index.php?pag=2" method="POST">
		<div class="form-group col-lg-6">
                    <label for="">Marcador local:</label>
                    <input type="text" class="form-control" name="marcadorlocal" value="<?= ($idedit)? $usuactu[0]['marcadorlocal'] : '' ?>">
                    
		</div>
		<div class="form-group col-lg-6">
                    <label for="">Marcador visitante:</label>
                    <input type="text" class="form-control" name="marcadorvisit" value="<?= ($idedit)? $usuactu[0]['marcadorvisit'] : '' ?>">
		</div>
		<div class="form-group col-lg-6">
                    <label for="">Id partido:</label>
                    <input type="email" class="form-control" name="idpartido" value="<?= ($idedit)? $usuactu[0]['idpartido'] : '' ?>">
		</div>
		<div class="form-group col-lg-6">
                    <label for="">idusuario:</label>
                    <input type="text" class="form-control" name="idusuario" value="<?= ($idedit)? $usuactu[0]['idusuario'] : '' ?>">
					
		</div>
                <div class="form-group col-lg-6">
                    <label>&nbsp;</label><br>
                    <input type="submit" class="btn btn-primary" value="<?= ($idedit) ? 'Actualizar usuario' : 'Ingresar usuario' ?>">
                </div>
                
                    <?php if($idedit): ?>
                        <input type="hidden" name="actu" value="actu">
                        <input type="hidden" name="idusuario" value="<?= $usuactu[0]['idusuario'] ?>">
                    <?php else: ?>
                        <input type="hidden" name="insert" value="insert"/>
                    <?php endif; ?>
	</form>
</div>


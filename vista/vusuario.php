<?php include("controlador/Usuariocontroller.php"); ?>

<div class="container-fluid">
	<h1>Usuario</h1>
	<form action="" method="POST">
		<div class="form-group col-lg-6">
                    <label for="">Número de documento:</label>
                    <input type="text" class="form-control" name="numdoc" value="<?= ($idedit)? $usuactu[0]['numdoc'] : '' ?>">
                    
		</div>
		<div class="form-group col-lg-6">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?= ($idedit)? $usuactu[0]['nombre'] : '' ?>">
		</div>
		<div class="form-group col-lg-6">
                    <label for="">Apellido:</label>
                    <input type="text" class="form-control" name="apellido" value="<?= ($idedit)? $usuactu[0]['apellido'] : '' ?>">
		</div>
		<div class="form-group col-lg-6">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?= ($idedit)? $usuactu[0]['email'] : '' ?>">
		</div>
		<div class="form-group col-lg-6">
                    <label for="">Username:</label>
                    <input type="text" class="form-control" name="username" value="<?= ($idedit)? $usuactu[0]['username'] : '' ?>">
		</div>
                <?php if(!$idedit): ?>    
		<div class="form-group col-lg-6">
                    <label for="">Contraseña:</label>
                    <input type="password" class="form-control" name="pass">
		</div>
                <?php endif; ?>
		<div class="form-group col-lg-6">
                    <label for="">Tipo usuario:</label>
					<input type="text" class="form-control" name="tipouser" value="<?= ($idedit)? $usuactu[0]['tipouser'] : '' ?>">
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


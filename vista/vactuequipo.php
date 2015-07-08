
<?php include("controlador/cequipos.php"); ?>

<div class="container-fluid">
	<h1>Editar Equipo</h1>
	<form action="home.php?var=11&id=<?= $idequipo ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre del Equipo:</label>
            <input type="text" class="form-control" name="nomequi" value="<?= $consultaequi[0]['nomequi'] ?>" pattern="[A-z ]{2,25}" title="Solo se permiten letras máximo 25 caracteres" required>
			<input type="hidden" name="idequipo" value="<?= $idequipo ?>">
            <input type="hidden" name="actu" value="actu"> 
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha de Fundación:</label>
            <input type="date" class="form-control" name="fechafund" value="<?= $consultaequi[0]['fechafund'] ?>" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Página Web:</label>
            <input type="text" class="form-control" name="paginaweb" value="<?= $consultaequi[0]['paginaweb'] ?>">
		</div>
		<div class="form-group col-lg-6">
            <label for="">Ciudad Capital:</label>
            <input type="text" class="form-control" name="ciudadcap" value="<?= $consultaequi[0]['ciudadcap'] ?>" pattern="[A-z ]{2,30}" title="Solo se permiten letras sin puntos máximo 30 caracteres" required>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Grupo:</label>
            <select name="grupo" class="form-control">
				<option value="<?= $consultaequi[0]['grupo']  ?>">Seleccione grupo</option>
				<?php for($i=0;$i<count($grupo2);$i++): ?>
					<option value="<?= $grupo2[$i]['idgrupo'] ?>"><?= $grupo2[$i]['nombregrup'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-primary" value="Editar">
			<a href="home.php?var=9" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
		
		
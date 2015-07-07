<?php
	include ("controlador/cciudadxgrupo.php");	
?>
<div class="row-fluid">
<h1>Editar Grupo y Ciudad</h1>
	<form action="home.php?var=7&id=<?= $idciuxgru ?>"" method="POST">
		<div class="form-group col-lg-6">
            <label>Ciudad:</label><br />
			<select name="idciudad" class="form-control">
				<option value="<?= $consultaciuxgru[0]['idciudad']  ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($idciudad2);$i++): ?>
					<option value ="<?php echo $idciudad2[$i]['idciudad'] ?>" ><?php echo $idciudad2[$i]['nombreciudad'] ?></option>
				<?php endfor; ?>
			</select>
            <input type="hidden" name="idciuxgru" value="<?= $idciuxgru ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		<div class="form-group col-lg-6">
            <label>Grupo:</label><br />
			<select name="idgrupo" class="form-control">
				<option value="<?=  $consultaciuxgru[0]['idgrupo'] ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($idgrupo2);$i++): ?>
					<option value ="<?php echo $idgrupo2[$i]['idgrupo'] ?>" ><?php echo $idgrupo2[$i]['nombregrup'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
        <div class="form-group col-lg-12 center">
            <input type="submit" class="btn btn-primary" value="Editar">
			<a href="home.php?var=5" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
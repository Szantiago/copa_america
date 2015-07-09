<?php
	include ("controlador/ctitulo.php");	
?>
<div class="row-fluid">
<h1>Ingresar Titulo del Entrenador</h1>
	<form action="home.php?var=23&id=<?= $idtitulo ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Titulo Obtenido:</label>
            <input type="text" class="form-control" name="titulo" value="<?= $consultatituloedit[0]['titulo']  ?>"required> 
			<input type="hidden" name="idtitulo" value="<?= $idtitulo ?>">
            <input type="hidden" name="actu" value="actu">    			
		</div>
		<div class="form-group col-md-6">
			<label>Director Técnico:</label><br />
			<select name="iddt" class="form-control">
				<option value="<?= $consultatituloedit[0]['iddt']  ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($iddt2);$i++): ?>
					<option value ="<?= $iddt2[$i]['iddt'] ?>" ><?= $iddt2[$i]['apellidodt'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Descripcion:</label>
            <input type="textarea" class="form-control" name="descripcion" value="<?= $consultatituloedit[0]['descripcion']  ?>"required>
		</div>
		<div class="form-group col-md-6 center">
			<br>
            <input type="submit" class="btn btn-primary" value="Editar">
			<a href="home.php?var=9" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
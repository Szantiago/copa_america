<?php include("controlador/cpartidos.php"); ?>

<script language="javascript">

	window.onload=function() {
    document.getElementById("f2").onsubmit=function () {
      var equi1=document.getElementById("equipolocal").value;
      var equi2=document.getElementById("equipovisit").value;
      if (equi1 == equi2)
      {
        alert('Los equipos son los mismos');
        return false;
      }
      else
        return true;
    }
  }
</script>

<div class="container-fluid">
	<h1>Editar Partidos</h1>

	<form id="f2" action="home.php?var=19&id=<?= $idpartido ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Equipo Local:</label>
			<select name="equipolocal" id="equipolocal" class="form-control">
				<option value="<?= $consultaedit[0]['equipolocal']  ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($equipo2);$i++): ?>
					<option value ="<?= $equipo2[$i]['idequipo'] ?>" ><?= $equipo2[$i]['nomequi'] ?></option>
				<?php endfor; ?>
			</select>
			<input type="hidden" name="idpartido" value="<?= $idpartido ?>">
            <input type="hidden" name="actu" value="actu">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Equipo Visitante:</label>
			<select name="equipovisit" id="equipovisit" class="form-control">
				<option value="<?=  $consultaedit[0]['equipovisit'] ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($equipo2);$i++): ?>
					<option value ="<?= $equipo2[$i]['idequipo'] ?>" ><?= $equipo2[$i]['nomequi'] ?></option>
				<?php endfor; ?>
			</select>
			
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Horario:</label>
            <input type="datetime-local" class="form-control" name="horario" value="<?=  $consultaedit[0]['horario'] ?>">
		</div>
		
		<div class="form-group col-md-6">
			<label>Estadio:</label><br />
			<select name="idciudadestadio" class="form-control">
				<option value="<?=  $consultaedit[0]['idciudadestadio'] ?>"> Seleccione una opcion </option>
				<?php for($i=0;$i<count($ciudadestadio2);$i++): ?>
					<option value ="<?= $ciudadestadio2[$i]['idciudad'] ?>" ><?= $ciudadestadio2[$i]['estadioprinc'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Local:</label>
            <input type="text" class="form-control" name="marcadorlocal" value="<?=  $consultaedit[0]['marcadorlocal'] ?>">
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Marcador Visitante:</label>
            <input type="text" class="form-control" name="marcadorvisit" value="<?=  $consultaedit[0]['marcadorvisit'] ?>">
		</div>
        <div class="form-group col-lg-12" center>
             <input type="submit" class="btn btn-primary" value="Editar">
			<a href="home.php?var=19" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>

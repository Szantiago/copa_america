<?php include("controlador/cpartidos.php"); ?>

<?php $consultapartidos = $partidos->consultar_partidos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Partidos Registrados</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Equipo Local</th>
				<th></th>
				<th>Equipo Visitante</th>
				<th>Horario</th>
				<th>Estadio</th>
				<th>Local</th>
				<th>Visitante</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultapartidos);$i++): 
				$estadio = $partidos->seleccionar_ciudad_id($consultapartidos[$i]["idciudadestadio"]);?>
				<tr>
					<td><?= $consultapartidos[$i]['idpartido']; ?></td>
					<td><?= nombre_equipo($consultapartidos[$i]['equipolocal'], $partidos) ?></td>
					<td><?= "VS"; ?></td>
					<td><?= nombre_equipo($consultapartidos[$i]['equipovisit'], $partidos) ?></td>
					<td><?= $consultapartidos[$i]['horario']; ?></td>
					<td><?= $estadio[0]['estadioprinc']; ?></td>
					<td><?= $consultapartidos[$i]['marcadorlocal']; ?></td>
					<td><?= $consultapartidos[$i]['marcadorvisit']; ?></td>
					<td><?php date_default_timezone_set('America/Bogota');
					
						$fecha = date("Y")."-".date("m")."-".date("d")." ".date("H").":".date("i").":".date("s");
							
					if( $consultapartidos[$i]['horario'] <= $fecha){
						echo "desabilitado";
					}else{
						echo "Habilitado";
					}?></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
<?php include("controlador/capuestas.php"); ?>
<a href="home.php?var=3" class="btn btn-success">Ingresar Apuesta</a>
<table class="table">
	<thead>
		<tr>
			<th colspan="5">Mis Apuestas</th>
		</tr>
		<tr>
			<th>#</th>
			<th>Resultado</th>
			<th>Apuesta</th>
			<th>Estado</th>
			<th>Usuario</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($perfil==1): ?>
			<?php for($i=0 ; $i < count($result = $apuesta->getResultApuTod()) ; $i++): ?>
				<tr>
					<td class="text-left"><?= $i + 1 ?></td>
					<td class="text-left">
						<?= $result[$i]['equilo'] ?> : <?= $result[$i]['resloc'] ?> <br>
						<?= $result[$i]['equivi'] ?> : <?= $result[$i]['resvis'] ?>
					</td>
					<td class="text-left">
						<?= $result[$i]['equilo'] ?> : <?= $result[$i]['apuloc'] ?> <br>
						<?= $result[$i]['equivi'] ?> : <?= $result[$i]['apuvis'] ?>
					</td>
					<td class="text-left">
						<?php $apuesta->getResApu($result[$i]['resloc'] , $result[$i]['apuloc'], $result[$i]['resvis'], $result[$i]['apuvis']) ?>
					</td>
					<td class="text-left">
						<?= $result[$i]['nombre'] . " " . $result[$i]['apellido'] ?>
					</td>
				</tr>
			<?php endfor; ?>
		<?php else: ?>	
			<?php for($i=0 ; $i < count($result = $apuesta->getResultApu()) ; $i++): ?>
				<tr>
					<td class="text-left"><?= $i + 1 ?></td>
					<td class="text-left">
						<?= $result[$i]['equilo'] ?> : <?= $result[$i]['resloc'] ?> <br>
						<?= $result[$i]['equivi'] ?> : <?= $result[$i]['resvis'] ?>
					</td>
					<td class="text-left">
						<?= $result[$i]['equilo'] ?> : <?= $result[$i]['apuloc'] ?> <br>
						<?= $result[$i]['equivi'] ?> : <?= $result[$i]['apuvis'] ?>
					</td>
					<td class="text-left">
						<?php $apuesta->getResApu($result[$i]['resloc'] , $result[$i]['apuloc'], $result[$i]['resvis'], $result[$i]['apuvis']) ?>
					</td>
					<td class="text-left">
						<?= $result[$i]['nombre'] . " " . $result[$i]['apellido'] ?>
					</td>
				</tr>
			<?php endfor; ?>
		<?php endif ?>
	</tbody>
</table>
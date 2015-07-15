<?php include("controlador/Usuariocontroller.php"); ?>

<div class="container-fluid">
    <h1>Usuarios registrados</h1>
    <a class="btn btn-primary" href="home.php?var=25">Ingresar Usuarios</a>
    <br>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Número de documento</th>
            <th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
            <th>UserName</th>
            <th>Tipo de usuario</th>
            <th>Editar</th>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($usuariosreg = $usuario1->Usuarios());$i++): ?>
                <tr class="text-left">
                    <td><?= $i + 1 ?></td>
                    <td><?= $usuariosreg[$i]['numdoc'] ?></td>
                    <td><?= $usuariosreg[$i]['nombre'] ?></td>
					<td><?= $usuariosreg[$i]['apellido'] ?></td>
					<td><?= $usuariosreg[$i]['email'] ?></td>
                    <td><?= $usuariosreg[$i]['username'] ?></td>
                    <td><?php $usuario1->TipoUsuario($usuariosreg[$i]['tipouser']); ?></td>
                    <td><a class="btn btn-primary" href="home.php?var=25&idedit=<?= $usuariosreg[$i]['idusuario'] ?>">Editar usuario<a/></td>
                </tr>    
            <?php endfor; ?>
        </tbody>
    </table>
</div>

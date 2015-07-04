<?php include("controlador/Usuariocontroller.php"); ?>

<div class="container-fluid">
    <h1>Usuarios registrados</h1>
    <a class="btn btn-primary" href="index.php?pag=1">Ingresar Usuarios</a>
    <br>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Número de documento</th>
            <th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
            <th>UserName</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($usuariosreg = $usuario1->Usuarios());$i++): ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $usuariosreg[$i]['numdoc'] ?></td>
                    <td><?= $usuariosreg[$i]['nombre'] ?></td>
					<td><?= $usuariosreg[$i]['apellido'] ?></td>
					<td><?= $usuariosreg[$i]['email'] ?></td>
                    <td><?= $usuariosreg[$i]['username'] ?></td>
                    <td><a class="btn btn-primary" href="index.php?pag=1&idedit=<?= $usuariosreg[$i]['idusuario'] ?>">Editar usuario<a/></td>
                    <td><a class="btn btn-danger" href="">Eliminar usuario</a></td>
                </tr>    
            <?php endfor; ?>
        </tbody>
    </table>
</div>

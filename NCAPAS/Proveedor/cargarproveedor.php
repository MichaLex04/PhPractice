<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Proveedores</title>
</head>
<body>
    <div>
        <?php
            require '../conexion.php';
            $sql = 'SELECT * FROM proveedor';
            $ps = $cn->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();
        ?>
        <h1>Listado de Proveedores</h1>
        <hr>
        <a href="guardarproveedor.php">Crear Nuevo</a>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>RUC</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filas as $f){ ?>
                <tr>
                    <td><?= $f[0] ?></td>
                    <td><?= $f[1] ?></td>
                    <td><?= $f[2] ?></td>
                    <td><?= $f[3] ?></td>
                    <td><?= $f[4] ?></td>
                    <td><a href="modificarproveedor.php?idpro=<?= $f[0] ?>">Modificar</a></td>
                    <td><a href="borrarproveedor.php?idpro=<?= $f[0] ?>">Borrar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

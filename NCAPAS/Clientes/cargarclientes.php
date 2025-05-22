<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
</head>
<body>
    <div>
        <?php
            require '../conexion.php';
            $sql = 'SELECT * FROM cliente';
            $ps = $cn->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();    
        ?>
        <h1>Listado de Clientes</h1>
        <hr>
        <a href="guardarcliente.php">Crear Nuevo</a>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
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
                    <td><?= $f[5] ?></td>
                    <td><a href="modificarcliente.php?idcli=<?= $f[0] ?>">Modificar</a></td>
                    <td><a href="borrarcliente.php?idcli=<?= $f[0] ?>">Borrar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

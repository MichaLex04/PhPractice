<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require '../conexion.php';
            $idfam=$_GET["idfam"];
            $sql='select * from categoria where idfamilia=:idfam';
            $ps=$cn->prepare($sql);
            $ps->bindParam(':idfam',$idfam);
            $ps->execute();
            $filas=$ps->fetchall();    
        ?>
        <h1>Reporte de Categorias</h1>
        <hr>
        <a href="guardarcategorias.php">Crear Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>IdFamilia</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($filas as $f){
                ?>
                <tr>
                    <td><?=$f[0]?></td>
                    <td><?=$f[1]?></td>
                    <td><?=$f[2]?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
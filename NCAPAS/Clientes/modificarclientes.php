<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
</head>
<body>
    <div>
        <?php
            require '../conexion.php';
            $idcli = $_GET['idcli'];
            $sql = 'SELECT * FROM cliente WHERE idcliente = :idcli';
            $ps = $cn->prepare($sql);
            $ps->bindParam(':idcli', $idcli);
            $ps->execute();
            $fila = $ps->fetch();
        ?>
        <h1>Modificar Cliente</h1>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="txtIdCli" value="<?= $fila[0] ?>">
            Nombres <br>
            <input type="text" name="txtNom" value="<?= $fila[1] ?>" required> <br>
            Apellidos <br>
            <input type="text" name="txtApe" value="<?= $fila[2] ?>" required> <br>
            DNI <br>
            <input type="text" name="txtDni" value="<?= $fila[3] ?>" maxlength="8" required> <br>
            Celular <br>
            <input type="text" name="txtCel" value="<?= $fila[4] ?>" maxlength="12" required> <br>
            Dirección <br>
            <input type="text" name="txtDir" value="<?= $fila[5] ?>" required> <br>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>

<?php
    if ($_POST) {
        $idcli = $_POST['txtIdCli'];
        $nom = $_POST['txtNom'];
        $ape = $_POST['txtApe'];
        $dni = $_POST['txtDni'];
        $cel = $_POST['txtCel'];
        $dir = $_POST['txtDir'];

        $sql = "UPDATE cliente SET nombres = :nom, apellidos = :ape, dni = :dni, celular = :cel, direccion = :dir 
                WHERE idcliente = :idcli";
        $ps = $cn->prepare($sql);
        $ps->bindParam(":nom", $nom);
        $ps->bindParam(":ape", $ape);
        $ps->bindParam(":dni", $dni);
        $ps->bindParam(":cel", $cel);
        $ps->bindParam(":dir", $dir);
        $ps->bindParam(":idcli", $idcli);
        $ps->execute();
        header('Location: cargarclientes.php');
    }
?>

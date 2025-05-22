<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Cliente</title>
</head>
<body>
    <div>
        <h1>Registro de Cliente</h1>
        <hr>
        <form action="" method="post">
            Nombres <br>
            <input type="text" name="txtNom" required> <br>
            Apellidos <br>
            <input type="text" name="txtApe" required> <br>
            DNI <br>
            <input type="text" name="txtDni" maxlength="8" required> <br>
            Celular <br>
            <input type="text" name="txtCel" maxlength="12" required> <br>
            Dirección <br>
            <input type="text" name="txtDir" required> <br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>

<?php
    require '../conexion.php';
    if ($_POST) {
        $nom = $_POST['txtNom'];
        $ape = $_POST['txtApe'];
        $dni = $_POST['txtDni'];
        $cel = $_POST['txtCel'];
        $dir = $_POST['txtDir'];

        $sql = "INSERT INTO cliente (idcliente, nombres, apellidos, dni, celular, direccion) 
                VALUES (NULL, :nom, :ape, :dni, :cel, :dir)";
        $ps = $cn->prepare($sql);
        $ps->bindParam(":nom", $nom);
        $ps->bindParam(":ape", $ape);
        $ps->bindParam(":dni", $dni);
        $ps->bindParam(":cel", $cel);
        $ps->bindParam(":dir", $dir);
        $ps->execute();
        header('Location: cargarclientes.php');
    }
?>

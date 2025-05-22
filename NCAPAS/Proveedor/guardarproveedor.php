<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Proveedor</title>
</head>
<body>
    <div>
        <h1>Registrar Nuevo Proveedor</h1>
        <hr>
        <form action="" method="post">
            Nombre <br>
            <input type="text" name="txtNom" required> <br>
            RUC <br>
            <input type="text" name="txtRuc" maxlength="11" required> <br>
            Teléfono <br>
            <input type="text" name="txtTel" maxlength="12" required> <br>
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
        $ruc = $_POST['txtRuc'];
        $tel = $_POST['txtTel'];
        $dir = $_POST['txtDir'];

        $sql = "INSERT INTO proveedor (idproveedor, nombre, ruc, telefono, direccion)
                VALUES (NULL, :nom, :ruc, :tel, :dir)";
        $ps = $cn->prepare($sql);
        $ps->bindParam(":nom", $nom);
        $ps->bindParam(":ruc", $ruc);
        $ps->bindParam(":tel", $tel);
        $ps->bindParam(":dir", $dir);
        $ps->execute();
        header('Location: cargarproveedores.php');
    }
?>

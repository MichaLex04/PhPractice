<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Proveedor</title>
</head>
<body>
    <div>
        <?php
            require '../conexion.php';
            $idpro = $_GET['idpro'];
            $sql = 'SELECT * FROM proveedor WHERE idproveedor = :idpro';
            $ps = $cn->prepare($sql);
            $ps->bindParam(':idpro', $idpro);
            $ps->execute();
            $fila = $ps->fetch();
        ?>
        <h1>Modificar Proveedor</h1>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="txtIdPro" value="<?= $fila[0] ?>">
            Nombre <br>
            <input type="text" name="txtNom" value="<?= $fila[1] ?>" required> <br>
            RUC <br>
            <input type="text" name="txtRuc" value="<?= $fila[2] ?>" maxlength="11" required> <br>
            Teléfono <br>
            <input type="text" name="txtTel" value="<?= $fila[3] ?>" maxlength="12" required> <br>
            Dirección <br>
            <input type="text" name="txtDir" value="<?= $fila[4] ?>" required> <br>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>

<?php
    if ($_POST) {
        $idpro = $_POST['txtIdPro'];
        $nom = $_POST['txtNom'];
        $ruc = $_POST['txtRuc'];
        $tel = $_POST['txtTel'];
        $dir = $_POST['txtDir'];

        $sql = "UPDATE proveedor SET nombre = :nom, ruc = :ruc, telefono = :tel, direccion = :dir
                WHERE idproveedor = :idpro";
        $ps = $cn->prepare($sql);
        $ps->bindParam(":nom", $nom);
        $ps->bindParam(":ruc", $ruc);
        $ps->bindParam(":tel", $tel);
        $ps->bindParam(":dir", $dir);
        $ps->bindParam(":idpro", $idpro);
        $ps->execute();
        header('Location: cargarproveedores.php');
    }
?>

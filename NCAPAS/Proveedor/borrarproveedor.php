<?php
    require '../conexion.php';
    $idpro = $_GET['idpro'];
    $sql = "DELETE FROM proveedor WHERE idproveedor = :idpro";
    $ps = $cn->prepare($sql);
    $ps->bindParam(":idpro", $idpro);
    $ps->execute();
    header('Location: cargarproveedores.php');
?>

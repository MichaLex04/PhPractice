<?php
    require '../conexion.php';
    $idcli = $_GET['idcli'];
    $sql = "DELETE FROM cliente WHERE idcliente = :idcli";
    $ps = $cn->prepare($sql);
    $ps->bindParam(":idcli", $idcli);
    $ps->execute();
    header('Location: cargarclientes.php');
?>

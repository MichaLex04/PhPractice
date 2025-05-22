<?php
    require "../logica/LFamilia.php";
    $fam=new Familia();
    $fam->setNombre("A...");
    $fam->setDescripcion("Atte: Gwar Gura");
    $log=new LFamilia();
    $log->guardar($fam);
    echo "DATOS GUARDADOS";
?>
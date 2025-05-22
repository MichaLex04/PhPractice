<?php
    require "../entidades/familia.php";
    interface IFamilia{
        public function guardar(Familia $familia);
        public function cargar();
    }
?>
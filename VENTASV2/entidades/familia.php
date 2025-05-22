<?php
    class Familia{
        private $idfamilia;
        private $nombre;
        private $descripcion;

        public function getIdfamilia(){
            return $this->idfamilia;
        }

        public function setIdfamilia($idfamilia){
            $this->idfamilia = $idfamilia;
        }

        public function getNombre($nombre){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getdescripcion(){
            return $this->descripcion;
        }

        public function setdescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

    }
?>
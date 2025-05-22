<?php
require "./model/CursoModel.php";
    class CursoController{
        public function cargarCursos(){
            $model=new CursoModel();
            $cursos=$model->cargarCursos();
            require "./view/cursoView.php";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Listado de Cursos</h1>
        <hr>
        <ul>
            <?php
                foreach ($cursos as $cur){
            ?>
            <li><?=$cur?></li>
            <?php
                }
            ?>
        </ul>
    </div>
</body>
</html>
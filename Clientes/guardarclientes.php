<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require '../conexion.php';
            $sql='select * from familia';
            $ps=$cn->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();    
        ?>
        <h1>Insercion de Clientes</h1>
        <hr>
        <form action="" method="post">
            Nombre <br>
            <input type="text" name="txtNom"> <br>
            Familia <br>
            <select name="cbxIdFam">
                <option>Seleccione</option>
                <?php
                foreach($filas as $f){
                ?>
                <option value=""><?=$f[0]?>.-<?=$f[1]?></option>
                <?php
                }
                ?>
            </select>
            <br>
            <input type="submit" value="guardar">
        </form>
    </div>
</body>
</html>
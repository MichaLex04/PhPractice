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
        <h1>Generar Reporte de Categorias</h1>
        <hr>
        Familia <br>
        <select name="cbxIdFam" id="cbxIdFam" onchange="enviarValor()">
            <option>Seleccione</option>
            <?php
                foreach($filas as $f){
            ?>
            <option value="<?=$f[0]?>"><?=$f[1]?></option>
            <?php
                }
            ?>
        </select>
        <br>
    </div>
</body>
</html>
<script>
    function enviarValor(){
        idfam=document.getElementById('cbxIdFam').value;
        console.log(idfam)
        window.location.href="reporte1.php?idfam="+idfam;
    }
</script>
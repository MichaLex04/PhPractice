<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.1.min.js"></script>
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
        <div id="res">

        </div>
        <br>
    </div>
</body>
</html>
<script>
    function enviarValor(){
        idfam=$("#cbxIdFam").val();
        param={"idfam":idfam};
        $.ajax({
            data: param,
            url:"reporte1.php",
            type:"get",
            success:function(res){
                //alert(res);
                $("#res").html(res);
            }
        })
    }
</script>
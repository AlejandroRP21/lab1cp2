<?php include 'conexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">precio</label>
        <input type="tel" name="precio" id="">
        <label for="">stock</label>
        <input type="int" name="stock" id="">
        <label for="">talla</label>
        <textarea name="talla" id=""></textarea>
        <button type="submit">Ingresar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nombre = $_POST["precio"];
            $fecha = $_POST["stock"];
            $motivo = $_POST["talla"];

            $insercion = $conexion->prepare("INSERT 
            INTO gorrasstilos(precio,stock,talla) VALUES(?,?,?)");
            $insercion->bind_param("sss", 
            $precio, $stock, $talla);
            $insercion->execute();
            header("Location:index.php");
        }

    ?>
</body>
</html>
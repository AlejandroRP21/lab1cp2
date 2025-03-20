<?php include 'conexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "header.php"; ?>
    
</head>

<body>
<form action="" method="post">
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" required>

        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" required>

        <label for="talla">Talla</label>
        <input type="text" name="talla" id="talla" required>

        <label for="talla">estilos</label>
        <input type="text" name="estilos" id="estilos" required>

        <button type="submit">Ingresar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];
            $talla = $_POST["talla"];
            $estilos = $_POST["estilos"];

            $insercion = $conexion->prepare("INSERT INTO gorrasstilo(precio,stock,talla,estilos) VALUES(?,?,?,?)");
            $insercion->bind_param("ssss", 
            $precio, $stock, $talla,$estilos);
            $insercion->execute();
            header("Location:index.php");   
            exit();
        }

    ?>
    
</body>

</html>

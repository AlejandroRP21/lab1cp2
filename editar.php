<?php include 'conexion.php';

$id = $_GET["id"];
$resultado = $conexion->query("SELECT * FROM gorrasstilos WHERE id=$id"); 
$gorra = $resultado->fetch_assoc(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Gorra</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Precio</label>
        <input type="tel" name="precio" value="<?php echo $gorra["precio"] ?>">
        <label for="">Stock</label>
        <input type="number" name="stock" value="<?php echo $gorra["stock"] ?>">
        <label for="">Talla</label>
        <textarea name="talla"><?php echo $gorra["talla"] ?></textarea>
        <button type="submit">Actualizar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];
            $talla = $_POST["talla"];

            $actualizacion = $conexion->prepare("UPDATE gorrasstilos SET precio=?, stock=?, talla=? WHERE id=?");
            $actualizacion->bind_param("diss", $precio, $stock, $talla, $id);
            $actualizacion->execute();
            header("Location: index.php");
        }
    ?>
</body>
</html>

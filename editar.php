<?php include 'conexion.php';
$id = $_GET["id"];
$resultado = $conexion->query("SELECT * FROM gorrasstilo WHERE id_gorra=$id"); 
$gorra = $resultado->fetch_assoc(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Gorra</title>
    <?php include "header.php"; ?>
</head>
<body>
    <form action="" method="post">
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" 
        value="<?php echo $gorra['precio']; ?>" required>

        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock"
        value="<?php echo $gorra['stock']; ?>" required>

        <label for="talla">Talla</label>
        <input type="text" name="talla" id="talla"
        value="<?php echo $gorra['talla']; ?>" required>

        <label for="estilos">Estilos</label>
        <input type="text" name="estilos" id="estilos"
        value="<?php echo $gorra['estilos']; ?>" required>

        <button type="submit">Actualizar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];
            $talla = $_POST["talla"];
            $estilos = $_POST["estilos"];

            $actualizacion = $conexion->prepare("UPDATE gorrasstilo SET precio=?, stock=?, talla=?, estilos=? WHERE id_gorra=?");
            $actualizacion->bind_param("ssssi", $precio, $stock, $talla, $estilos, $id);
            $actualizacion->execute();
            header("Location: index.php");
            exit();
        }
    ?>
</body>
</html>

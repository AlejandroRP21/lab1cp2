<?php include("conexion.php");  
<?php include "header.php"; ?>
    $id = $_GET["id"];
    $conexion->query("DELETE FROM gorrasstilo
                    WHERE id_gorra=$id");  
    header("Location:index.php");  

?>
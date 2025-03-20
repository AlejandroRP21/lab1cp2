<?php include "conexion.php"; ?>
<?php include "header.php"; ?>

    <main>
        <h2>Inventario de Gorras</h2>
        <a href="agregar.php">
            <button type="button">Agregar Inventario</button>
        </a>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Talla</th>
                    <th>Estilos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $listado = $conexion->query("SELECT * FROM gorrasstilo");
                    while ($dato = $listado->fetch_assoc()) {
                        echo "<tr>
                                <td>{$dato['precio']}</td>
                                <td>{$dato['stock']}</td>
                                <td>{$dato['talla']}</td>
                                <td>{$dato['estilos']}</td>
                                <td>
                                    <a href='editar.php?id={$dato['id_gorra']}'>
                                        <button>Editar</button>
                                    </a>
                                    <a href='eliminar.php?id={$dato['id_gorra']}' onclick='return confirm(\"¿Seguro que quieres eliminar este registro?\")'>
                                        <button>Borrar</button>
                                    </a>
                                </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <?php include "footer.php";?>

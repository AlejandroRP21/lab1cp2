<?php
include 'includes/db.php';
include 'includes/includes_header.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h2>Lista de Usuarios</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td>
            <a href="update.php?id=<?php echo $row['id']; ?>">Editar</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include 'includes/includes_footer.php'; ?>


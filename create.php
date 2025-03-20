<?php
include 'includes/db.php';
include 'includes/includes_header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Crear Usuario</h2>
<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="name" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Edad:</label>
    <input type="number" name="age" required>
    <button type="submit">Guardar</button>
</form>

<?php include 'includes/includes_footer.php'; ?>

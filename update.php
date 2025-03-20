<?php
include 'includes/db.php';
include 'includes/includes_header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Actualizar Usuario</h2>
<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <label>Edad:</label>
    <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
    <button type="submit">Actualizar</button>
</form>

<?php include 'includes/includes_footer.php'; ?>

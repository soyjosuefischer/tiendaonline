<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$username = $_SESSION['username'];

$sql = "SELECT fullname, email FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row["fullname"];
    $email = $row["email"];
} else {
    $fullname = "Nombre no encontrado";
    $email = "Correo no encontrado";
}

$conn->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta | Tienda Online</title>

    <link rel="stylesheet" href="css/myaccount-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
<div class="account-container">
    <a href="home.php">
        <ion-icon class="back-icon" name="arrow-back-outline"></ion-icon>
    </a>
    <h2>Mi Cuenta</h2>
    <div class="user-info">
        <ion-icon class="person-icon" name="person-circle-outline"></ion-icon>
        <div class="user-data">
            <p class="fullname"><?php echo $fullname; ?></p>
            <p><?php echo $email; ?></p>
        </div>
    </div>
    <form action="myaccount.php" method="post" class="btn-logout-form">
        <button type="submit" class="btn-logout">Cerrar sesión</button>
    </form>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
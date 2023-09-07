<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $updateSql = "UPDATE users SET password = '$password' WHERE email = '$email'";

        if ($conn->query($updateSql) === TRUE) {
            $message = "Contraseña cambiada exitosamente.";
        } else {
            $message = "Error al cambiar la contraseña: " . $conn->error;
        }
    } else {
        $message = "El usuario con el correo electrónico proporcionado no existe.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar Contraseña | Tienda Online</title>
  
  <link rel="stylesheet" href="css/changepassword-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="changepassword-container">
        <h2>Cambiar contraseña</h2>
        <p>¿Olvidaste tu contraseña? No te preocupes, escribe tu correo electrónico y crea una nueva contraseña para recuperarla</p>

        <?php
        if (!empty($message)) {
            echo '<p class="message">' . $message . '</p>';
        }
        ?>

        <form action="changepassword.php" method="post" id="changepassword-form" class="changepassword-form">
            <label for="email">Correo electrónico</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn btn-changepassword">Cambiar contraseña</button>
        </form>
    </div>
</body>
</html>
<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "Te has registrado exitosamente.";
        header('Location: login.php');
        exit;
        
    } else {
        $message = "Error en el registro: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Cuenta | Tienda Online</title>
  
  <link rel="stylesheet" href="css/signup-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="signup-container">
    <h2>Crear cuenta</h2>
    <p>¡Bienvenido! Crea una cuenta para comenzar</p>

    <?php
    if (!empty($message)) {
        echo '<p class="message">' . $message . '</p>';
    }
    ?>

    <form action="signup.php" method="post" id="signup-form" class="signup-form">
    <label for="fullname">Nombres y apellidos</label>
      <input type="text" id="fullname" name="fullname" required>
      
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" required>

      <label for="username">Nombre de usuario</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <div class="terms-conditions">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">Acepto los <a href="#">Términos y Condiciones</a> de <i>Tienda Online</i></label>
      </div>

      <button type="submit" class="btn btn-signup">Crear cuenta</button>
      <br>
      <p><b>¿Ya tienes una cuenta?</b></p><a href="login.php" class="login-link">Inicia sesión</a>
    </form>
  </div>
</body>
</html>
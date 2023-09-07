<?php
session_start();

if (isset($_SESSION['username'])) {
   header('Location: home.php');
   exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "tiendaonline";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $message = "Autenticación exitosa.";
        
        $_SESSION['username'] = $username;

        header('Location: home.php');
        exit;
    } else {
        $message = "Nombre de usuario o contraseña incorrecto.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión | Tienda Online</title>
  
  <link rel="stylesheet" href="css/login-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <p>¡Bienvenido de nuevo! Inicia sesión para comenzar</p>

    <?php
    if (!empty($message)) {
        echo '<p class="message";">' . $message . '</p>';
    }
    ?>

    <form action="login.php" method="post" id="login-form" class="login-form">
      <label for="text">Nombre de usuario</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>
      <a href="changepassword.php" class="forgot-password-link">¿Olvidaste tu contraseña?</a>

      <button type="submit" class="btn btn-login">Iniciar sesión</button>
      <br>
      <p><b>¿Aún no tienes una cuenta?</b></p><a href="signup.php" class="forgot-password-link">Crea una cuenta</a>
    </form>
  </div>
</body>
</html>
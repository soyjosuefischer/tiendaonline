<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$username = "";
$password = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $message = "Autenticación exitosa.";
        header('Location: home.php');
        exit;
    } else {
        $message = "Error en la autenticación.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión | Tienda Online</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: "Poppins", sans-serif;
 }
  
 .login-container {
    max-width: 400px;
    margin: 30px;
    padding: 40px;
    background-color: #fff;
    border-radius: 25px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 }

 .login-container p {
    text-align: center;
 }
  
 h2 {
    font-size: 24px;
    text-align: center;
 }

 .message {
   color: red;
 }
  
 .login-form {
    margin-top: 50px;
 }
  
 label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
 }
  
 input[type="text"],
 input[type="password"] {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 12px;
 }
  
 .btn {
    display: block;
    width: 100%;
    padding: 12px 24px;
    background-color: #000000;
    color: #fff;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 12px;
    font-size: 18px;
    cursor: pointer;
 }
  
 .btn-login {
    margin-top: 20px;
 }
  
 .forgot-password-link {
    display: block;
    text-align: center;
    color: #000000;
    text-decoration: underline;
    margin-top: 10px;
 }
  </style>
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
      <label for="email">Nombre de usuario</label>
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
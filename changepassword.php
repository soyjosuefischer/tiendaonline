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
  
 .changepassword-container {
    max-width: 400px;
    margin: 30px;
    padding: 40px;
    background-color: #fff;
    border-radius: 25px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 }

 .changepassword-container p {
    text-align: center;
 }
  
 h2 {
    font-size: 24px;
    text-align: center;
 }

 .message {
   color: red;
 }
  
 .changepassword-form {
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
  
 .btn-changepassword {
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

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
        $message = "Registro exitoso.";
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

  a {
    color: #000000;
    text-decoration: underline;
  }
  
  .signup-container {
    max-width: 400px;
    margin: 30px;
    padding: 10px 40px 40px 40px;
    border-radius: 25px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .signup-container p {
    text-align: center;
  }
  
  h2 {
    font-size: 24px;
    text-align: center;
  }

  .message {
   color: red;
 }
  
  .signup-form {
    margin-top: 50px;
  }
  
  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="email"],
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
  
  .btn-signup {
    margin-top: 20px;
  }
  
  .terms-conditions {
    display: flex;
    align-items: center;
  }

  .terms-conditions label {
    font-weight: 400;
  }
  
  .terms-conditions input[type="checkbox"] {
    margin-right: 10px;
    margin-bottom: 12px;
  }  
  </style>
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
    </form>
  </div>
</body>
</html>
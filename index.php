<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¡Bienvenido a Tienda Online!</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
 }
  
 .welcome-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
 }
  
 .welcome-image {
    width: 200px;
    height: 200px;
 }
  
 .welcome-message {
    text-align: center;
    margin: 30px 50px 0px 50px;
 }
  
 .welcome-message h1 {
    font-size: 36px;
    margin-bottom: 10px;
    color: #000000;
 }
  
 .welcome-message p {
    font-size: 20px;
    color: #000000;
    font-weight: 400;
 }
  
 .welcome-buttons {
    margin-top: 40px;
 }
  
 .btn-login {
    display: inline-block;
    padding: 12px 24px;
    background-color: #000000;
    color: #fff;
    text-decoration: none;
    border-radius: 12px;
    font-size: 18px;
    margin: 10px;
    transition: background-color 0.3s ease;
 }

 .btn-signup {
    display: inline-block;
    padding: 12px 24px;
    background-color: #fff;
    color: #000000;
    text-decoration: none;
    border-radius: 12px;
    border: 1px solid #000000;
    font-size: 18px;
    margin: 10px;
    transition: background-color 0.3s ease;
 }
  
 .btn-signup:hover {
    background-color: #000000;
    color: #fff;
 }
  </style>
</head>

<body>
  <div class="welcome-container">
    <img class="welcome-image" src="assets/welcome-illustration.png" alt="Ilustración de bienvenida">
    <div class="welcome-message">
      <h1>Todo lo que necesitas en un solo lugar</h1>
      <p>Explora nuestra amplia selección de productos y encuentra las mejores ofertas que tenemos para ti.<br>Estamos emocionados de que nos elijas como tu destino para comprar en línea.</p>
    </div>
    <div class="welcome-buttons">
      <a href="login.php" class="btn btn-login">Iniciar sesión</a>
      <a href="signup.php" class="btn btn-signup">Crear una cuenta</a>
    </div>
  </div>
</body>
</html>
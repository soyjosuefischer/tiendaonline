<!-- GET -->

<?php
header("Content-Type: application/json");

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT id, fullname, email, username, password FROM users";
    
    $stmt = $conn->query($sql);
    
    $users = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $users[] = $row;
    }

    echo json_encode($users);
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido. Utiliza GET para obtener datos de usuarios."));
}
?>

<!-- POST -->

<?php
header("Content-Type: application/json");

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents("php://input"), true);

    if (isset($postData['fullname']) && isset($postData['email']) && isset($postData['username']) && isset($postData['password'])) {
        $fullname = $postData['fullname'];
        $email = $postData['email'];
        $username = $postData['username'];
        $password = $postData['password'];

        $sql = "INSERT INTO users (fullname, email, username, password) VALUES (:fullname, :email, :username, :password)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo json_encode(array("message" => "Usuario registrado exitosamente."));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Error al registrar el usuario: " . $stmt->errorInfo()));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Solicitud POST incompleta o incorrecta. Asegúrate de proporcionar todos los campos necesarios (fullname, email, username, password)."));
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido. Utiliza POST para registrar nuevos usuarios."));
}
?>

<!-- PATCH -->

<?php
header("Content-Type: application/json");

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    $patchData = json_decode(file_get_contents("php://input"), true);

    if (isset($patchData['id'])) {
        $id = $patchData['id'];

        $updates = array();
        $params = array();

        if (isset($patchData['fullname'])) {
            $updates[] = "fullname = :fullname";
            $params[':fullname'] = $patchData['fullname'];
        }

        if (isset($patchData['email'])) {
            $updates[] = "email = :email";
            $params[':email'] = $patchData['email'];
        }

        if (isset($patchData['username'])) {
            $updates[] = "username = :username";
            $params[':username'] = $patchData['username'];
        }

        if (isset($patchData['password'])) {
            $updates[] = "password = :password";
            $params[':password'] = $patchData['password'];
        }

        if (!empty($updates)) {
            $sql = "UPDATE users SET " . implode(", ", $updates) . " WHERE id = :id";
            $params[':id'] = $id;

            $stmt = $conn->prepare($sql);

            if ($stmt->execute($params)) {
                echo json_encode(array("message" => "Datos del usuario actualizados exitosamente."));
            } else {
                http_response_code(500);
                echo json_encode(array("message" => "Error al actualizar los datos del usuario."));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Ningún campo para actualizar proporcionado."));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Solicitud PATCH incompleta o incorrecta. Se requiere el campo 'id'."));
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido. Utiliza PATCH para actualizar datos."));
}
?>

<!-- DELETE -->

<?php
header("Content-Type: application/json");

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tiendaonline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $deleteData = json_decode(file_get_contents("php://input"), true);

    if (isset($deleteData['id'])) {
        $id = $deleteData['id'];

        $sql = "DELETE FROM users WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo json_encode(array("message" => "Usuario eliminado exitosamente."));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Error al eliminar el usuario: " . $stmt->errorInfo()));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Solicitud DELETE incompleta o incorrecta. Asegúrate de proporcionar el campo 'id' del usuario que deseas eliminar."));
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido. Utiliza DELETE para eliminar usuarios."));
}
?>
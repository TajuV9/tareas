<?php
session_start();
require_once 'app/config/configDB.php';
require_once 'app/models/AccesoDatosPDO.php';

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

if ($_SESSION['intentos'] == 3) {
    die("Demasiados intentos fallidos. Reinicia el navegador para intentarlo de nuevo.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $midb = AccesoDatos::getModelo();
    $query = "SELECT * FROM Usuario WHERE login = ?";
    $usuario = $midb->getUsuario($query, [$login]);

    if ($usuario && password_verify($password, $usuario->password)) {
        $_SESSION['usuario_login'] = $usuario->login;
        $_SESSION['usuario_rol'] = $usuario->rol;
        $_SESSION['intentos'] = 0; 
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['intentos']++;
        $error = "Login incorrecto. Intento " . $_SESSION['intentos'] . " de 3.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST">
        <label>Usuario:</label>
        <input type="text" name="login" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Ingresar</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>

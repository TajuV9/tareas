<?php
session_start();

define('UPLOAD_DIR', 'app/uploads/');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $archivo = $_FILES['imagen'];
        $ext = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, ['jpg', 'png'])) {
            $_SESSION['msg'] = "Solo se permiten imágenes JPG o PNG.";
        } else if ($archivo['size'] > 512000) {
            $_SESSION['msg'] = "La imagen es demasiado grande (máx. 500 KB).";
        } else {
            $nombreArchivo = "cliente_" . $id . "." . $ext;
            $rutaDestino = UPLOAD_DIR . $nombreArchivo;

            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                $_SESSION['msg'] = "Imagen guardada correctamente.";
            } else {
                $_SESSION['msg'] = "Error al guardar la imagen.";
            }
        }
    }
    header("Location: index.php");
}
?>

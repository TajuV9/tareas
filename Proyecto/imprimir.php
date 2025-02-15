<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'app/config/configDB.php';
require_once 'app/models/AccesoDatosPDO.php';
require_once 'app/models/Cliente.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $db = AccesoDatos::getModelo();
    $cli = $db->getCliente($_POST['id']);

    if (!$cli) {
        die("Cliente no encontrado.");
    }

    $mpdf = new \Mpdf\Mpdf();
    
    $mpdf->WriteHTML('<h1>Datos del Cliente</h1>');
    $mpdf->WriteHTML("<p><strong>ID:</strong> {$cli->id}</p>");
    $mpdf->WriteHTML("<p><strong>Nombre:</strong> {$cli->first_name}</p>");
    $mpdf->WriteHTML("<p><strong>Apellido:</strong> {$cli->last_name}</p>");
    $mpdf->WriteHTML("<p><strong>Email:</strong> {$cli->email}</p>");
    $mpdf->WriteHTML("<p><strong>Género:</strong> {$cli->gender}</p>");
    $mpdf->WriteHTML("<p><strong>IP:</strong> {$cli->ip_address}</p>");
    $mpdf->WriteHTML("<p><strong>Teléfono:</strong> {$cli->telefono}</p>");

    $mpdf->Output();
}
?>

<?php require_once("main.php") // Fichero aparte para el main ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¡PIEDRA, PAPEL, TIJERA!</h1>
    <p>Actualice la página para mostrar otra partida</p>
    <table>
        <tr>
            <th>Jugador 1</th>
            <th>Jugador 2</th>
        </tr>
        <tr>
            <td><span style="font-size: 7rem"> <?= $jugador1 ?> </td>
            <td><span style="font-size: 7rem"> <?= $jugador2 ?> </td>
        </tr>
        <tr>
            <th colspan="2"> <?= $mensaje ?> </th>
        </tr>     
    </table>
</body>
</html>

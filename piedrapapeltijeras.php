<?php 

    // Fichero aparte para las funciones
    require_once("funcionesPPT.php");

    // Constantes con los movimientos
    define('PIEDRA1',  "&#x1F91C");
    define('PIEDRA2',  "&#x1F91B");
    define('TIJERAS',  "&#x1F596");
    define('PAPEL',    "&#x1F91A");

    // Constantes para compararlas con lo que devuelve la función elegirGanador
    define('EMPATE', 0);
    define('GANA1', 1);
    define('GANA2', 2);

    $jugador1 = eleccionMovimiento();
    if($jugador1 == PIEDRA2) $jugador1 = PIEDRA1; // Si el jugador tiene la piedra contraria le pongo la que le pertenece
    
    $jugador2 = eleccionMovimiento();
    if($jugador2 == PIEDRA1) $jugador2 = PIEDRA2; // Si el jugador tiene la piedra contraria le pongo la que le pertenece

    $ganador = elegirGanador($jugador1, $jugador2);

    $mensaje = construirMensaje($ganador);

?>

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

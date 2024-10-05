<?php 
    require_once("funcionesPPT.php"); // Fichero aparte para las funciones 

    // Constantes con los movimientos
    define('PIEDRA1',  "&#x1F91C");
    define('PIEDRA2',  "&#x1F91B");
    define('TIJERAS',  "&#x1F596");
    define('PAPEL',    "&#x1F91A");
    $movimientos = meterMovimientos();
    
    // Constantes para compararlas con lo que devuelve la función elegirGanador
    define('EMPATE', 0);
    define('GANAJUGADOR1', 1);
    define('GANAJUGADOR2', 2);

    $jugador1 = eleccionMovimiento($movimientos);
    // Si el jugador1 tiene la piedra contraria le pongo la que le pertenece
    if($jugador1 == PIEDRA2) $jugador1 = PIEDRA1; 
    
    $jugador2 = eleccionMovimiento($movimientos);
    // Si el jugador2 tiene la piedra contraria le pongo la que le pertenece
    if($jugador2 == PIEDRA1) $jugador2 = PIEDRA2; 

    $ganador = elegirGanador($jugador1, $jugador2);

    $mensaje = construirMensaje($ganador);
?>

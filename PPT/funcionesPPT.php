<?php 
    // Meto los movimientos en un array
    function meterMovimientos(){
        return [
            PIEDRA1,
            PIEDRA2,
            TIJERAS,
            PAPEL
        ];
    }

    // Elegir piedra, papel o tijera y devuelvo el movimiento elegido al azar
    function eleccionMovimiento($jugadas){
        return $jugadas[random_int(0,3)];
    }

    // En función del movimiento de cada jugador se elige al ganador
    function elegirGanador($j1, $j2){
        if ($j1 == $j2 || $j1 == PIEDRA1 && $j2 == PIEDRA2) {
            return 0;
        } else if (
            ($j1 == PIEDRA1 && $j2 == TIJERAS) || 
            ($j1 == PAPEL && $j2 == PIEDRA2) || 
            ($j1 == TIJERAS && $j2 == PAPEL)
            ) {
            return 1;
        } else return 2;
    }

    // Construyo el mensaje de empate o ganador correspondiente
    function construirMensaje($vencedor){
        return ($vencedor == EMPATE) ? "¡Empate!" : 
        "Ha ganado el jugador " . 
        ($vencedor == GANAJUGADOR1 ? GANAJUGADOR1 : GANAJUGADOR2);
    }
?>

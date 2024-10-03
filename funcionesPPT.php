<?php 

    // Elegir piedra, papel o tijera y devuelvo el movimiento elegido al azar
    function eleccionMovimiento(){
        switch(random_int(1,4)) {
            case 1: return PIEDRA1; 
            case 2: return PIEDRA2; 
            case 3: return TIJERAS; 
            case 4: return PAPEL; 
        }
    }

    // En función del movimiento de cada jugador se elige al ganador
    function elegirGanador($j1, $j2){
        if ($j1 == $j2 || $j1 == PIEDRA1 && $j2 == PIEDRA2) {
            return 0;
        } else if (
            ($j1 == PIEDRA1 && $j2 == TIJERAS) || 
            ($j1 == PAPEL && $j2 == PIEDRA2) || 
            ($j1 == TIJERAS && $j2 == PAPEL)
            )
        {
            return 1;
        } else {
            return 2;
        } 
    }

    // Construyo el mensaje de empate o ganador correspondiente
    function construirMensaje($ganador){
        return ($ganador == EMPATE) ? "¡Empate!" : "Ha ganado el jugador " . ($ganador == GANA1 ? GANA1 : GANA2);
    }

?>
<?php 

    // Cada jugador tira el dado 5 veces
    function elegirTiradas($dado){
    	$vecesTiradas = 5;
        for($i=0; $i < $vecesTiradas; $i++) { 
            $tiradas[] = $dado[rand(0, $vecesTiradas-1)];
        }
        return $tiradas;
    }

    // Devuelve el número correspondiente al valor que ha salido en el dado
    function valores($valor){
        switch ($valor) {
          case UNO: return 1;
          case DOS: return 2; 
          case TRES: return 3; 
          case CUATRO: return 4; 
          case CINCO: return 5;
          case SEIS: return 6;
        }
    }

    // Sumar la puntuación de los dados restando el valor del máximo y mínimo al total
    function sumarPuntuacion($tiradas){
        foreach($tiradas as $tirada){
            $sumaPuntos += valores($tirada);
        }
        return $sumaPuntos - valores(max($tiradas)) - valores(min($tiradas));
    }

    // Elegir empate o ganador según las puntuaciones de los jugadores
    function quienGana($jugador1, $jugador2){
        return ($jugador1 == $jugador2) ? "¡Empate!" : 
        "Ha ganado el jugador " . ($jugador1 > $jugador2 ? 1 : 2);
    }

    // Mostrar los dados 
    function mostrarTiradas($tiradas){
    	foreach($tiradas as $tirada){
        	echo $tirada;
        }
    }

?>

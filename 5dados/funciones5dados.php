<?php 
    // Poner a cada cara del dado su valor
	function crearDado(){
        return [
                  1 => "&#9856", 
                  2 => "&#9857", 
                  3 => "&#9858", 
                  4 => "&#9859", 
                  5 => "&#9860", 
                  6 => "&#9861"
    		];
    }

    // Cada jugador tira el dado 5 veces
    function elegirTiradas($dado){
    	$carasDado = count($dado);
    	$numeroTiradas = 5;
        for($i = 1; $i <= $numeroTiradas; $i++) { 
            $caraAzar = rand(1, $carasDado);
            $tiradas[$i] = $dado[$caraAzar];
        }
        return $tiradas;
    }
    
    // Devuelve el número correspondiente al valor que ha salido en el dado
    function valores($valor, $dado){
    	foreach($dado as $numeroDado => $valorDado){
        	if($valorDado == $valor) 
		   return $numeroDado;
        }
    }

    // Sumar la puntuación de los dados restando el valor del máximo y mínimo al total
    function sumarPuntuacion($tiradas, $dado){
    	$tiradaMaxima = valores(min($tiradas), $dado);
    	$tiradaMinima = valores(max($tiradas), $dado);
        foreach($tiradas as $tirada){
            $sumaPuntos += valores($tirada, $dado);
        }
        return $sumaPuntos - $tiradaMinima - $tiradaMaxima;
    }

    // Elegir empate o ganador según las puntuaciones de los jugadores
    function quienGana($jugador1, $jugador2){
        return ($jugador1 == $jugador2) ? "¡Empate!" : 
        	"Ha ganado el jugador " . 
        	($jugador1 > $jugador2 ? 1 : 2);
    }

    // Mostrar los dados 
    function mostrarTiradas($tiradas){
    	foreach($tiradas as $tirada){
        	echo $tirada;
        }
    }
?>

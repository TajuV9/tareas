<?php

    require_once(funciones5Dados.php); // Llamo al fichero con las funciones aparte

    $numerosDado = crearDado();

    $tiradasJ1 = elegirTiradas($numerosDado);
    $puntuacionJ1 = sumarPuntuacion($tiradasJ1, $numerosDado);

    $tiradasJ2 = elegirTiradas($numerosDado);
    $puntuacionJ2 = sumarPuntuacion($tiradasJ2, $numerosDado);
    
    $resultado = quienGana($puntuacionJ1, $puntuacionJ2);

?>

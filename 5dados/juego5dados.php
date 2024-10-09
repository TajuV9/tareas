<?php

    require_once(funciones5Dados.php);

    // Constantes con las caras de un dado
    define('UNO', "&#9856");
    define('DOS', "&#9857");
    define('TRES', "&#9858");
    define('CUATRO', "&#9859");
    define('CINCO', "&#9860");
    define('SEIS', "&#9861");
    $numerosDado = [UNO, DOS, TRES, CUATRO, CINCO, SEIS];

    $tiradas1 = elegirTiradas($numerosDado);
    $puntuacion1 = sumarPuntuacion($tiradas1);

    $tiradas2 = elegirTiradas($numerosDado);
    $puntuacion2 = sumarPuntuacion($tiradas2);
    
    $resultado = quienGana($puntuacion1, $puntuacion2);

?>

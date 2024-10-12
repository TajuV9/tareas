<?php require_once(juego5dados.php) // Llama al main ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .centro{
			font-size: 3.6rem;
			height: 6rem;
        }

        #rojo{
            background-color: red;
        }

        #azul{
            background-color: blue;
        }
        
    </style>
</head>
<body>
    <h1>Cinco dados</h1>
    <p>Actualice la página para mostrar una nueva tirada.</p>
    <table>
        <tr>
            <th>Jugador 1</th>
            <td id="rojo" class="centro">
                <?= mostrarTiradas($tiradasJ1) ?>
            </td>
            <th> <?= $puntuacionJ1 ?> puntos </th>
        </tr>
        <tr>
            <th>Jugador 2</th>
            <td id="azul" class="centro">
                <?= mostrarTiradas($tiradasJ2) ?>
            </td>
            <th> <?= $puntuacionJ2 ?> puntos </th>
        </tr>
        <tr>
            <th>Resultado</th>
            <td> <?= $resultado ?> </td>
        </tr>
    </table>
</body>
</html>

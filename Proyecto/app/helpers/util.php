<?php

/*
 *  Funciones para limpiar la entrada de posibles inyecciones
 */

function limpiarEntrada(string $entrada):string{
    $salida = trim($entrada); // Elimina espacios antes y después de los datos
    $salida = strip_tags($salida); // Elimina marcas
    return $salida;
}
// Función para limpiar todos elementos de un array
function limpiarArrayEntrada(array &$entrada){
 
    foreach ($entrada as $key => $value ) {
        $entrada[$key] = limpiarEntrada($value);
    }
}

//---------------------------------------------

function validarEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $db = AccesoDatos::getModelo();
        $clientes = $db->getClientes(1, $db->numClientes());
        foreach ($clientes as $cliente) {
            if ($cliente->email == $email) {
                return false;
            }
        }
        return true;
    } else {
        return false;
    }
}

function validarTelefono($telefono){
    $partes = explode('-', $telefono);
    return strlen($partes[0]) == 3 && strlen($partes[1]) == 3 && strlen($partes[2]) == 4;
}

function obtenerRutaImagen($id){
    if ($id > 0 && $id <= 10){
        $totalCeros = $id == 10 ? 6 : 7;
        $ceros = str_repeat('0', $totalCeros);
        return "app/uploads/{$ceros}{$id}.jpg";
    }
    return "https://robohash.org/{$id}";
}

function obtenerBandera($ip) {
    $url = "http://ip-api.com/php/{$ip}?fields=countryCode";
    $respuesta = file_get_contents($url);
    $campo = unserialize($respuesta);
    if ($campo && isset($campo['countryCode'])) {
        $codigoPais = strtolower($campo['countryCode']);
        $banderaUrl = "https://flagpedia.net/data/flags/w580/{$codigoPais}.webp";  
        return "<img src='{$banderaUrl} 'width='100'>";
    } else {
        return "<p>IP no asociada a ninguna bandera</p>";
    }
}

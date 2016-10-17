<?php

$array_elementos = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

function busqueda_binaria($array, $elemento_buscado){
    $indice_bajo = 0;
    $indice_alto = sizeof($array) - 1;
    $elemento_encontrado = "elemento no encontrado";
    $contador_de_iteraiones = 0;

    while ($indice_bajo < $indice_alto){
        $contador_de_iteraiones++;
        $centro = ($indice_bajo + $indice_alto) /2;
        if ($array[$centro] == $elemento_buscado){
            $elemento_encontrado = $array[$centro];
            return "elemento encontrado: $elemento_encontrado, en $contador_de_iteraiones iteracion/es";
        }
        elseif ($array[$centro] < $elemento_buscado){
            $indice_bajo = $centro;
        }
        elseif ($array[$centro] > $elemento_buscado){
            $indice_alto = $centro;
        }
    }
    return $elemento_encontrado;
}

echo busqueda_binaria($array_elementos, 22);
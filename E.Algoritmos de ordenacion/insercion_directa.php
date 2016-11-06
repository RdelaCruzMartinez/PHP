<?php

    function insercion_directa($array_numeros) {
        $longitud = sizeof($array_numeros);
        for ($i = 1; $i < $longitud; $i++){
            $valor = $array_numeros[$i];
            //valor anterior para comparar
            $comparador = $i - 1;
            while($comparador >= 0 &&$array_numeros[$comparador] > $valor) {
                //mientras el valor del comparador sea mayor que el de la posicion i,
                // se mete el valor del comparador en la posicion i.
                $array_numeros[$comparador + 1] = $array_numeros[$comparador];
                //se reduce el comparador para iterar sobre el array
                $comparador--;
            }
            $array_numeros[$comparador + 1] = $valor;
        }
        return $array_numeros;
    }



    function main() {
        $array_inicial = array(84,4,8,2,10);
        $array_ordenado = insercion_directa($array_inicial);
        for ($i=0; $i < sizeof($array_ordenado); $i++)
            echo $array_ordenado[$i]."\n";
    }

    main();





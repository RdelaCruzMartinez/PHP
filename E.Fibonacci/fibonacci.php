<?php

$serie = $_GET['serie'];

fibonacci($serie);


    function fibonacci($total_serie){
        $fibo_1 = 0;
        $fibo_2 = 1;
        $nuevo_fibo = 0;
        if($total_serie >= 2) {
            echo 'Iniciando la serie....<br/>';
            echo "$fibo_1".'<br/>';
            echo "$fibo_2".'<br/>';
            for ($i = 3; $i <= $total_serie; $i++) {
                $nuevo_fibo = $fibo_1 + $fibo_2;
                $fibo_1 = $fibo_2;
                $fibo_2 = $nuevo_fibo;
                echo "$nuevo_fibo". '<br>';
            }
        }
        elseif ($total_serie == 0){
            echo 'Iniciando la serie....<br/>';
            echo "$fibo_1".'<br/>';
        }
        elseif ($total_serie == 1){
            echo 'Iniciando la serie....<br/>';
            echo "$fibo_1".'<br/>';
            echo "$fibo_2".'<br/>';
        }
        elseif ($total_serie < 0 or is_double($total_serie)){
            echo 'La serie debe ser de números enteros positivos';
        }

    };


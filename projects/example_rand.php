<?php

    $listA = inicializar_array(10, 1, 20);
    echo "<pre>";

        print_r($listA);

    echo "</pre>";

    function inicializar_array($numero_elementos, $min, $max){

        $lista = array();
        for ($i = 0; $i < $numero_elementos; $i++) {

         $lista[$i] = rand($min, $max);   

        }

        return $lista;

    }

?>
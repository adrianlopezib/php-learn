<?php

   
       function inicializar_array($numero_elementos, $min, $max){

        $lista = array();
        for ($i = 0; $i < $numero_elementos; $i++) {

         $lista[$i] = rand($min, $max);   

        }

        return $lista;

    }

?>
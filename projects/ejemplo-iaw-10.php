<?php

    //Create random variable
    $aleatorio = rand (0, 1);

    //Create if

    if ($aleatorio == 0){

        echo "<img src=\"other/cara_moneda.jpg\">";

    }else{

        echo "<img src=\"other/cruz_moneda.jpg\">";
    }

?>
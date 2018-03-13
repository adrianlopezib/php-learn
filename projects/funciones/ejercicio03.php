<?php

    include('functions.php');

    $temperaturas = inicializar_array(10, -10, 40);
    $media = calcular_media($temperaturas);
    eho "<h2>Media: $media</h2>"

?>
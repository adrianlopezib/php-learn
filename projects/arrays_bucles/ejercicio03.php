<?php


$title = "Tabla de multiplicar";
$numero = 8;


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
</head>
<body>

<?php

//Comentario de una sola línea

/*
    Esto es un comentario 
    de varias líneas
*/

//TABLA DEL 8

echo "<table border=\"1\">";

$num = 8;
for ($i = 1; $i<=10; $i++){

    $resultado = $num * $i;
    echo "<tr>";

    echo "<td>$num</td>";
    echo "<td> x </td>";
    echo "<td>$i</td>";
    echo "<td> = </td>";
    echo "<td>$resultado</td>";

    echo "</tr>";
    

}

echo "</table>";

?> 

</body>
</html>

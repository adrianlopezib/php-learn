<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TABLA MULTIPLICAR ALEATORIA</title>
</head>
<body>
<form method="post">

  <div>

    <label for="numero">Introduce un número:</label>
    <input type="text" name="numero">

  </div>

<?php
    echo "<table border=\"1\">";

    //Create random variable
    $aleatorio = rand(1, 10);

    //Create for
    for ($i = 1; $i<=10; $i++){

    //Multiply random variable with for
        $resultado = $aleatorio * $i;
        echo "<tr>";

        echo "<td>$aleatorio</td>";
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
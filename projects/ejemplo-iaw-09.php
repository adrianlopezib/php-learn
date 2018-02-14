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

  <div class="button">
    <button type="submit">Calcular</button>
  </div>

</form>


<?php
    
    
    $numero = (int) $_POST["numero" ];

    if  (!empty($numero) && is_int($numero)){

        echo "<table border=\"1\">";

        for ($i = 1; $i<=10; $i++){

            $numero = (int) $_POST["numero"];
            $resultado = $numero * $i;
            echo "<tr>";

            echo "<td>$numero</td>";
            echo "<td> x </td>";
            echo "<td>$i</td>";
            echo "<td> = </td>";
            echo "<td>$resultado</td>";

            echo "</tr>";

        }

        echo "</table>";
    }    
    
?>

</body>
</html>
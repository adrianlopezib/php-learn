<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario con PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form method="get">
  <div>
    <label for="name">Nombre:</label>
    <input type="text" name="nombre">
  </div>

  <div>
    <label for="msg">Mensaje:</label>
    <textarea name="mensaje"></textarea>
  </div>
 
  <div class="button">
    <button type="submit">Enviar el mensaje</button>
  </div>

</form>

<?php

if (!empty($_GET["nombre"]) && !empty($_GET["mensaje"])){

    echo "<br>";
    echo "Nombre: ".$_GET["nombre"];
    echo "<br>";
    echo "Mensaje: ".$_GET["mensaje"];


}else {

    echo "<br>";
    echo "POR FAVOR INTRODUZCA UN VALOR!";

}

?>

</body>
</html>
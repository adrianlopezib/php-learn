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

<form method="post">
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

if (!empty($_POST["nombre"]) && !empty($_POST["mensaje"])){

    echo "<br>";
    echo "Nombre: ".$_POST["nombre"];
    echo "<br>";
    echo "Mensaje: ".$_POST["mensaje"];


}

?>

</body>
</html>
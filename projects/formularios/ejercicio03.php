<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MONEDAS RANDOM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form method="post">

    <br>
    <div>
    <label for="numero"><b>Número de vueltas:</b></label>
    <select name="flip">

        <option value="1" selected >1</option> 
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>

    </select>
    </div>  
    <br>
    <div> 
    <label for="tipo"><b>Tipo de moneda:</b></label>  
    <select name="type">

        <option value="euro" selected >Euro</option> 
        <option value="dolar">Dólar</option>
        <option value="yen">Yen</option>
        <option value="libra">Libra</option>
        <option value="franco">Franco Suizo</option>
  
    </select>
    </div>
    <br>
    <input type="submit" value="Lanzar">
    <br>

</form>

<?php

    $numero = $_POST["flip"];
    $tipo = $_POST["type"];

    $monedas = array();

    for ($i=0; $i<$numero; $i++){

        //Debemos de indicar la posicion del array en la que queremos que empiece.
        $monedas[$i] = rand (0, 1);

    }

    for ($x=0; $x<$numero; $x++){

        if($monedas[$x] == 0) {

            print "<img src=\"other/cara_moneda.jpg\">";

        }else{

            print "<img src=\"other/cruz_moneda.jpg\">";

        }

    }

    

   
?>


</body>
</html>
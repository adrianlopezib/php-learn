<!DOCTYPE <html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Ejercicio Notas</title> 
</head> 
<body>

<form method="post">

<div>
    <label for="nota">Nota:</label>
    <input type="int" name="nota">
</div>

<button type="submit">Enviar</button>

</form>




<?php

if(!empty($_POST["nota"])) {

    if($_POST["nota"]>=0 && $_POST["nota"]<5) {

        echo "Suspenso :(";   

    } 

    elseif($_POST["nota"]>=5 && $_POST["nota"]<6){

            echo "Bien, debes de hacerlo mejor :S";

    } 

        elseif($_POST["nota"]>=6 && $_POST["nota"]<8) {

            echo "Notable, no esta mal :D";

        }

        elseif($_POST["nota"]>=8 && $_POST["nota"]<10){

            echo "Notable, esta muy bien ! :)";

        }

        elseif($_POST["nota"]==10){

            echo "Sobresaliente <3";
            
        }
        
    
    echo "</br>";
    echo "</br>";
    echo "Nota: ".$_POST["nota"];

}

?>

</body> 
</html>
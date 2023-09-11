<?php

// operadores relacionales

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];


    if ($valorA > $valorB) {
        echo "el valor es A es mayor que el valor de B"."<br/>";
    } else {
        echo "El valor B es mayor que A"."<br/>";
    }



// esta sola condicion es la que contiene el tutorial las otras que tengo son de prueba
    if ($valorA != $valorB) {
        echo "el valor A es diferente que el valor de B";
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionales</title>
</head>

<body>

    <form action="ejercicio9.php" method="post">
        <br>
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">

    </form>

</body>

</html>
<?php

// operadores logicos

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];


    // && ampersan= ii para confirmar ambas tiene que cumplise la condicion para poder ingresar a el mensaje... || or si una de las condiciones son verdaderas va a ingresar a el mensaje el pasa a evaluar
    if ( ($valorA != $valorB) || ($valorA > $valorB) ) {
        echo "el valor A es diferente que el valor de B y tambien es mayor A";
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>

<body>

    <form action="ejercicio10.php" method="post">
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
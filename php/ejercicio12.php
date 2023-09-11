<?php

// if , else

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];


    if ($valorA != $valorB) {
        echo "el valor A es diferente que el valor de B"."<br/>";
    }else{
        echo "el valor A es igual a el de B ";
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF y else</title>
</head>

<body>

    <form action="ejercicio12.php" method="post">
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
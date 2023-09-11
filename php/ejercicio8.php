<?php

// operadores aritmeticos

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $division=$valorA/$valorB;
    $multiplicacion=$valorA*$valorB;

//los br los utilizo para saltos de linea
    echo " la suma de los dos mumeros es ".$suma."<br/>";
    echo " la resta de los dos mumeros es ".$resta."<br/>";
    echo " la division de los dos mumeros es ".$division."<br/>";
    echo " la multiplicacion de los dos mumeros es ".$multiplicacion."<br/>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <!-- operadores aritmeticos -->

    <form action="ejercicio8.php" method="post">
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
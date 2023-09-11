<?php

// if anidado

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

    if ($valorA == $valorB) {
        echo "el valor de A es igual al valor de B"."<br/>";

        if($valorA == 4){
            echo "el valor de B es 4 "."<br/>";
        }
        if($valorB == 5){
            echo "el valor de B es 5 "."<br/>";
        }

    }
    if(($valorA == $valorB)&& ($valorA == 4)){
        echo "el valor de A es igual a B y es un numero que es 4 ";

    }

    
    
  



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

    <form action="ejercicio11.php" method="post">
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
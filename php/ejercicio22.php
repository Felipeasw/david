<?php

$frutas=array("f"=>"fresa","P"=>"pera","m"=> "manzana", "b"=>"banana", "p"=>"piña");

print_r($frutas);

echo $frutas["m"]."<br/>";

foreach($frutas as $indice=>&$valor){

    // ambas contienen la  misma forma de imprimir en pantalla el valor

    // echo $valor."<br/>";
    // echo $frutas[$indice]."<br/>";
    

    echo "El valor ".$valor." Tiene el indice ".$indice."<br/>";

}


?>
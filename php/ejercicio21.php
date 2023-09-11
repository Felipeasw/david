<?php

// arreglos de indice numerico

$frutas=array("fresa", "pera", "manzana","banana");

// se lo va a leer con la funcion print_r

print_r($frutas);

echo $frutas[1]."<br/>";

// para leer todas por medio de un ciclo

for($indice=0;$indice<4;$indice++){

    echo $frutas[$indice]."<br/>";
}


?>
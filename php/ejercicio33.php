<?php
// los Json
$jsonContenido='[
    {"nombre":"vans", "apellido":"galindez"},
    {"nombre":"vans", "apellido":"galindez"}
    ]';

    $resultado= json_decode($jsonContenido);
    print_r($resultado);

    foreach ($resultado as $persona){
        print_r($persona->nombre)." ".($persona->apellido)."<br>";
    }

?>
<?php

//en esta se puede acceder a la informacion ya iniciada en el otro archivo por medio de la session strat
session_start();

//si esta logueado muestar informacion y si no ingresa a el else donde solo muestra un mensaje
if (isset($_SESSION["usuario"])){

echo"Usuario: ".$_SESSION["usuario"]." estatus ".$_SESSION["estatus"];

}else{

    echo "No hay datos";
}


?>
<?php

// sesiones para mantener informacion en cualquier pagina mientras el navegador este abierto
session_start();

// variables se inicializan
$_SESSION["usuario"]="vans";
$_SESSION["estatus"]="logueado";

echo"Sesion iniciada"."<br/>";

echo"Usuario: ".$_SESSION["usuario"]." estatus ".$_SESSION["estatus"];


?>
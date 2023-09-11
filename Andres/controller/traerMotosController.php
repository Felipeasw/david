<?php
include('../model/Moto.php'); // Asegúrate de que la ruta sea correcta

$moto = new Moto();
$datosMotos = $moto->traerMotos();
echo(json_encode($datosMotos));
?>

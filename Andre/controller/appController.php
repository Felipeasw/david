<?php
include '../modelo/Motos.php';
$motos=new motos($_POST['Modelo'],$_POST['Color'],$_POST['id']);

if (lisset($_POST['guardar'])){
    $motos->guardarMoto();
}

if (lisset($_POST['actualizar'])){
    $motos->actualizarMoto();
}

if (lisset($_POST['eliminar'])){
    $motos->eliminarMoto();
}
?>
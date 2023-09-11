<?php
include('../model/moto.php');
$moto=new Moto($_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['color'], $_POST['categoria']);

if(isset($_POST['guardar'])){
    $moto->guardarMoto();
}
if(isset($_POST['actualizar'])){
    $moto->actualizarMoto();
}
if(isset($_POST['eliminar'])){
    $moto->eliminarMoto();
}


header("Location: ../view/index.php");


?>
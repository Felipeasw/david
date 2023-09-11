<?php
include ('../model/Moto.php');

if (isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["color"]) && isset($_POST["categoria"])) {
    $moto = new Moto();
    $moto->setMarca($_POST["marca"]);
    $moto->setModelo($_POST["modelo"]);
    $moto->setColor($_POST["color"]);
    $moto->setCategoria($_POST["categoria"]);

    if (isset($_POST['guardar'])) {
        $moto->guardarMoto();
        echo json_encode(array('success' => true, 'message' => 'Motocicleta guardada exitosamente.'));
    } else {
        echo json_encode(array('success' => false, 'error' => 'Operación no válida.'));
    }
}
?>

<?php
include('../model/moto.php');

$moto=new Moto();
$datosMoto=$moto->traerMotos();



// Include your database connection setup here
// Example: include 'db_connection.php';

// Assuming you have an array called $datosMoto with your data
$datosMoto = [
    ['id' => 1, 'marca' => 'Honda', 'modelo' => 'CBR500R', 'color' => 'Rojo', 'categoria' => 'Deportiva'],
    // ... More data ...
];
echo json_encode($datosMoto);



?>
<?php


if($_GET){
    $nombre =  $_GET['nombre'];
    $apellido=$_GET['apellido'];
    $contraseña=$_GET['contraseña'];

    echo "nombre ".$nombre;
    echo "apellido ".$apellido;
    echo "contraseña ".$contraseña;
    
    
};

if($_POST){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $contraseña=$_POST['contraseña'];

    echo "nombre ".$nombre;
    echo "apellido ".$apellido;
    echo "contraseña ".$contraseña;

  
};

?>

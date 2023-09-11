


<?php

////////////////// metodo POST//////////////////////////////

// condicional para preguntar y no salga el error de warning cuando no existe un envio su logica es php pregunta hay un envio le hicieron un envio a travez de un formulario if si es asi el envio recepcionalo el valor txtNombre alamacenalo en una variable $nombre e imprimelo en pantalla echo"".$nombre;

if($_POST){

// recibir informacion del formulario html (metodo POST) recepciona valores
   $nombre=$_POST['txtNombre'];
// para imprimir solo el nombre 
   echo "Hola ".$nombre;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- para realizar un envio por metodo post  -->
<!-- por action se envia a la ruta o direccion url pero oculta estos datos de la vista donde esta la variable alamacenada en las etiquetas < ? php -->
<form action="ejercicio2.php" method="post">
    Nombre:

    <!-- informacion que se envia por medio de txtNombre que ya en php lo recibe el metodo POST -->
    <input type="text" name="txtNombre" id="">
    <br>
    <!-- con este boton envia los datos  -->
    <input type="submit" value="enviar">
</form>
    
</body>
</html>
<?php
// recepcion de datos
if($_POST){

    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];

    //concatenacion 
    echo "Hola ".$txtNombre." ".$txtApellido;

    // las comllas dobles sin datos es un espacio para que se imprima en pantalla separado
    // las comillas dobles es un string y comillas simples indica que es un grupo de caracteres
    // el punto es para concatenar 
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
    <!-- envio de variables, concatenizacion y el string -->

<!-- la action va a enviar informacion a travez de el metodo post  -->
    <form action="ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar">


    </form>
    
</body>
</html>
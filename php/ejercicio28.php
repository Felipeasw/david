<?php
// conexio para la base de datos 

$servidor="localhost";
$usuario="root";
$contrasena="";

// condicional de errores
try{

    // PDO sirve para conectarse facilmente a una base de datos
    $conexion=new PDO("mysql:host=$servidor;dbname=cursoPhpDeveloteca", $usuario, $contrasena );
    //setAttribute argumentos de atributos , PDO::ATTR_ERRMODE es  argumentos de error , PDO::ERRMODE_EXCEPTION para que se activen los erroes y se muestren
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"conexion establecida";

    // funcion de insercion
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugado con la programacion', 'foto.png')"; 
    // ejecutar la insercion
    $conexion->exec($sql);


// para distingir el error que se genera
}catch(PDOException $error){
    echo "Conexion erronea".$error;

}


?>
<?php
// leer datos de mysql

$servidor="localhost";
$usuario="root";
$contrasena="";

// condicional de errores
try{

    // PDO sirve para conectarse facilmente a una base de datos
    $conexion=new PDO("mysql:host=$servidor;dbname=cursoPhpDeveloteca", $usuario, $contrasena );
    //setAttribute argumentos de atributos , PDO::ATTR_ERRMODE es  argumentos de error , PDO::ERRMODE_EXCEPTION para que se activen los erroes y se muestren
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    $sql="SELECT * FROM `fotos`";
    // lectura 
    $sentencia=$conexion->prepare($sql);
    // ejecutar sentencia
    $sentencia->execute();
    // obter la informacion
    $resultado=$sentencia->fetchAll();

    // para solo obtener la consulta y leerlos con un foreach
    foreach($resultado as $foto){
      print_r($foto['$nombre']);
    }

    print_r($resultado);



    echo"conexion establecida";
// para distingir el error que se genera
}catch(PDOException $error){
    echo "Conexion erronea".$error;

}


?>
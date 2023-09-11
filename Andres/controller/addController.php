<?php
include ('conexion.php');
$pdo=new Conection();
//print_r($_POST);



if (isset($_POST['guardar'])){
    try{
        $sql="INSERT INTO moto (marca,modelo,color,categoria) VALUES ('{$_POST['marca']}','{$_POST['modelo']}','{$_POST['color']}','{$_POST['categoria']}')";
        $query=$pdo->prepare($sql);
        $query->execute();
        $lastInsertId = $pdo->lastInsertId();
        echo($lastInsertId);
    }catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}
if (isset($_POST['actualizar'])){
    try{
        $sql="UPDATE moto SET marca='{$_POST['marca']}',modelo='{$_POST['modelo']}',color='{$_POST['color']}',categoria='{$_POST['categoria']}' WHERE id={$_POST['id']}";
        $query=$pdo->prepare($sql);
        $query->execute();
    }catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}
if (isset($_POST['eliminar'])){
    try{
        $sql="DELETE FROM moto WHERE id={$_POST['id']}";
        $query=$pdo->prepare($sql);
        $query->execute();
    }catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}








?>
<?php
include '../controller/conexion.php';

class Moto
{
    private $id;
    private $marca;
    private $modelo;
    private $color;
    private $categoria;

    public function __construct ($Marca=null,$modelo=null, $color=null, $categoria=null, $id=null){
        $this->id=$id;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->color=$color;
        $this->categoria=$categoria;
    }
    public function guardarMoto(){
        $pdo=new Conection();
        try{
            $sql="INSERT INTO moto (marca,modelo,color,categoria) VALUES ('$this->marca','$this->modelo','$this->color','$this->categoria')";
            $query=$pdo->prepare($sql);
            $query->execute();
            $lastInsertId = $pdo->lastInsertId();
            echo($lastInsertId);
        }catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
    public function actualizarMoto(){
        $pdo=new Conection();
        try{
            $sql="UPDATE moto SET marca='$this->marca',modelo='$this->modelo',color='$this->color',categoria='$this->categoria' WHERE id=$this->id";
            $query=$pdo->prepare($sql);
            $query->execute();
        }catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
    public function eliminarMoto(){
        $pdo=new Conection();
        try{
            $sql="DELETE FROM moto WHERE id=$this->id";
            $query=$pdo->prepare($sql);
            $query->execute();
        }catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
    public function traerMotos(){
        
        $pdo=new Conection();
        try{
            $sql="SELECT * FROM moto";
            $query=$pdo->prepare($sql);
            $query->execute();
            $rta=$query->fetchAll();
            return $rta;
        }catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

}
?>
<?php
include('../controller/conexion.php');

class Moto
{
    private $id;
    private $marca;
    private $modelo;
    private $color;
    private $categoria;
    

    public function __construct($id = null, $marca=null, $modelo=null, $color=null,$categoria=null)
    {
       $this->id = $id;
       $this->marca = $marca;
       $this->modelo = $modelo;
       $this->color = $color;
       $this->categoria = $categoria;
    }

    public function guardarMoto()
    {
        try {
            $pdo = new Conexion();
            $sql = "INSERT INTO moto (marca, modelo, color, categoria) VALUES ('$this->marca', '$this->modelo', '$this->color', '$this->categoria')";
            $query = $pdo->prepare($sql);
            $query->execute();
            $lastInsertId = $pdo->lastInsertId();
            echo $lastInsertId;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }

    public function actualizarMoto()
    {
        try {
            $pdo = new Conexion();
            $sql = "UPDATE moto SET marca='$this->marca', modelo='$this->modelo', modelo='$this->modelo', categoria='$this->categoria' WHERE id=$this->id";
            $query = $pdo->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }

    public function eliminarMoto()
    {
        try {
            $pdo = new Conexion();
            $sql = "DELETE FROM moto WHERE id=$this->id";
            $query = $pdo->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }



    public function traerMotos(){
        $pdo=new Conexion();

        try{
            $sql="SELECT * FROM moto";
            $query=$pdo->prepare($sql);
            $query->execute();
            $rta=$query->fetchAll();
            return $rta;


        }catch(Exception $e){
            echo'Excepcion capturada: ',  $e->getMessage(), "/n";
        }
    }

  
}

?>

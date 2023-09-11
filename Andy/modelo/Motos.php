<?php
include '../controller/conexion.php';

class Motos
{
    private $id;
    private $modelo;
    private $color;

    public function __construct($modelo, $color, $id = null)
    {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function guardarAuto()
    {
        $pdo = new Conection();
        try {
            $sql = "INSERT INTO Motos (modelo, color) VALUES (:modelo, :color)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':modelo', $this->modelo);
            $query->bindParam(':color', $this->color);
            $query->execute();
            $lastInsertId = $pdo->lastInsertId();
            echo "Moto guardada con ID: " . $lastInsertId;
        } catch (Exception $e) {
            echo 'Excepción capturada: ' . $e->getMessage();
        }
    }


    public function actualizarMoto()
{
    $pdo = new Conection();
    try {
        $sql = "UPDATE Motos SET modelo = :modelo, color = :color WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindParam(':modelo', $this->modelo);
        $query->bindParam(':color', $this->color);
        $query->bindParam(':id', $this->id);
        $query->execute();
        echo "Moto con ID: " . $this->id . " actualizada correctamente.";
    } catch (Exception $e) {
        echo 'Excepción capturada: ' . $e->getMessage();
    }
}



public function eliminarMoto()
{
    $pdo = new Conection();
    try {
        $sql = "DELETE FROM Motos WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $this->id);
        $query->execute();
        echo "Moto con ID: " . $this->id . " eliminada correctamente.";
    } catch (Exception $e) {
        echo 'Excepción capturada: ' . $e->getMessage();
    }
}

}
?>

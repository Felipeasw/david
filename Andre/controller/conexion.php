<?php
class Conection extends PDO
{
    private $hostName = 'localhost';
    private $bdUser = 'root';
    private $dbName = 'andy';
    private $dbPwd = '';

    public function __construct()
    {
        try {
            parent::__construct('mysql:host=' . $this->hostName . ';dbname=' . $this->dbName, $this->bdUser, $this->dbPwd);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error en la conexión: ' . $e->getMessage();
            exit;
        }
    }
}
?>

<?php

class Conection extends PDO
{
    private $hostName='localhost';
    private $bdName='felipe';
    private $bdUser='root';
    private $bdPwd='';
    
    public function __construct (){
        try{
            parent::__Construct('mysql:host='.$this->hostName.';dbname='.$this->bdName.';chasrset=utf8', $this->bdUser, $this->bdPwd, 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
        }catch(PDOException $er){
            echo 'Error: '.$e->getMessage();
            exit;
        }
    }
}

?>
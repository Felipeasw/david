<?php

class Persona{

    public $Nombre; //propiedad

    // visibiidadd de propiedades
    private $Edad;  //PROPIEDAD privada que solo puede ser utilizada por los metodos
    protected $Altura; //solo se puede acceder de la misma clase y de las heredadas  //Encapsulamiento
    
    

     
    function __construct($NuevoNombre)
    {
        $this->Nombre=$NuevoNombre;
    }




    public function AsignarNombre($NuevoNombre){
        $this->Nombre=$NuevoNombre;

    }
    public function ImprimirNombre(){
        echo"Hola soy".$this->Nombre;
    }
    public function MostrarEdad(){
        $this->Edad=20;
        return $this->Edad;
    }

}

$objetoAlumnoVan=new Persona(" vanesa"); //instancia o creacion de un objeto 
// $objetoAlumno->AsignarNombre("Vanss"); //llamando un metodo
$objetoAlumnoVan->ImprimirNombre(""); 




?>
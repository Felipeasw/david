<?php

class persona{

    public $nombre; //propiedad

    // visibiidadd de propiedades
    private $Edad;  //PROPIEDAD privada que solo puede ser utilizada por los metodos
    protected $Altura; //solo se puede acceder de la misma clase y de las heredadas  //Encapsulamiento
    

    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;

    }
    public function ImprimirNombre(){
        echo"Hola soy".$this->nombre;
    }
    public function mostrarEdad(){
        $this->Edad=20;
        return $this->Edad;
    }

}

$objetoAlumno=new persona(); //instancia o creacion de un objeto
$objetoAlumno->asignarNombre("Vanss"); //llamando un metodo
$objetoAlumno->ImprimirNombre();

$objetoAlumno2=new persona(); //instancia o creacion de un objeto
$objetoAlumno2->asignarNombre("Jess"); //llamando un metodo
$objetoAlumno2->ImprimirNombre();

echo$objetoAlumno->nombre; //imprime una propiedad
echo $objetoAlumno->mostrarEdad();

echo$objetoAlumno2->nombre; //imprime una propiedad
echo $objetoAlumno2->mostrarEdad();
?>
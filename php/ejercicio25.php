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
 class trabajador extends persona{
    public $puesto; //propiedad nueva dentro de la funcion
    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

 }

$objetoTrabajador=new trabajador(); //instancia o creacion de un objeto
$objetoTrabajador->asignarNombre("Vanss Galindez"); //llamando un metodo
$objetoTrabajador->puesto="Profesor";

$objetoTrabajador->presentarseComoTrabajador();
?>


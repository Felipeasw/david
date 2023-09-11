<?php
// metodos estaticos

class Unaclase{

    public static function UnMetodo(){
        echo "Hola soy un metodo estatico ";
    }
}



$Obj=new Unaclase();
$Obj-> UnMetodo();

Unaclase::UnMetodo();


?>
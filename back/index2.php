<?php

define("PI", 3.1416);
echo PI; 

echo "</br></br>"; // para hacer espacios por deajo

$Nombre="Carlos";
$nombre="Eduardo";

echo $Nombre , " ", $nombre;
//echo $Nombre;
//echo $nombre;
$numeros=[1,2,3];
$personas=["nombre" =>"Juan","edad" =>30];//Array asociativo


class Persona{

    public $nombre;
    public $edad;
}

$oNombre=new Persona();
$oNombre -> nombre="Juan";
$oNombre -> edad=30;

echo "</br></br>";
echo $oNombre->nombre," ", $oNombre->edad ;


?>
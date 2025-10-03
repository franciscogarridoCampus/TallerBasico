<?php

/*
Crea un archivo PHP que haga lo siguiente:
○ Define variables de distintos tipos: un entero, un flotante, una cadena y un booleano. Luego imprime el valor y tipo de cada variable utilizando la función var_dump().

○ Crea un array asociativo que contenga información de una persona (nombre, edad, ciudad).

○ Define una constante llamada NOMBRE_CURSO con el valor "Programación PHP" y muestra su valor en pantalla.

○ Crea una función que reciba un array de números y devuelva la suma de todos sus elementos. Llámala con un array de ejemplo y muestra el resultado.

○ Declara una variable con el valor null y utiliza la función is_null() para verificar si la variable tiene valor null.
*/ 

//Variables:
$nombre="Francisco";
$apellido1="Garrido";
$apellido2="Ribeiro";
$edad=20;
$altura=1.53;
$soltero=true;

var_dump($nombre);// para mostrar información detallada de la estructura

echo "</br></br>";

var_dump($nombre, $apellido1, $apellido2);

echo "</br></br>";
echo "</br></br>";

var_dump($edad);
echo "</br></br>";
echo "</br></br>";
var_dump($altura);
echo "</br></br>";
echo "</br></br>";
var_dump($soltero);
echo "</br></br>";
echo "</br></br>";

$aPersona=["nombre"=>"Francisco","apellido1"=>"Garrido","apellido2"=>"Ribeiro","edad"=>20,"altura"=>1.53,"soltero"=>true];
var_dump($aPersona); //para ver el contenido del objeto aPersoand de forma estructurada: array(6) { ["nombre"]=> string(9) "Francisco" ["apellido1"]=> string(7) "Garrido" ["apellido2"]=> string(7) "Ribeiro" ["edad"]=> int(20) ["altura"]=> float(1.53) ["soltero"]=> bool(true) }

echo "</br></br>";
echo "</br></br>";
//define es constante, Taller de PHP es el valor y NOMBRE_CURSO es el nombre de la constante
define("NOMBRE_CURSO", "Taller de PHP");
echo NOMBRE_CURSO;

echo "</br></br>";
echo "</br></br>";

$tipoNull=Null;
if(is_null($tipoNull)){

    echo "es nulo";
}

echo "</br></br>";
echo "</br></br>";
$numero1=5;
$numero2=6;
$resultado=$numero1+$numero2;
echo $resultado;

echo "</br></br>";
$resultado=(5+3)*2;
echo $resultado;
echo "</br></br>";
$x=5;
$x +=3; // $x=$x+3
echo $x;//Imprime 8
//tambien esta -= (restar), *= (multiplicar), /= (dividir)
//si se usa % es para obtener el resto de la división;
//Si se usa ** :
echo "</br></br>";
$as=10;
$bs=3;
echo $as ** $bs; //10 elevado a la potencia de 30, Imprime 1000;

echo "</br></br>";
echo "</br></br>";

//Prueba comparativa

$a1=10;
$a2=3;

if($a1==$a2){

    echo "Es igual";
}else{
    echo "No es igual";
}
// Tmabien esta !=(disntino); < o > (menor o mayor que y seguramente el resto)
/*Igual (==): Devuelve true si los valores son iguales.
● Idéntico (===): Devuelve true si los valores y los tipos son iguales.
● Diferente (!= o <>): Devuelve true si los valores son diferentes.
● No idéntico (!==): Devuelve true si los valores o los tipos son diferentes.
● Menor que (<): Devuelve true si el primer valor es menor que el segundo.
● Mayor que (>): Devuelve true si el primer valor es mayor que el segundo.
● Menor o igual que (<=): Devuelve true si el primer valor es menor o igual que el
segundo.
● Mayor o igual que (>=): Devuelve true si el primer valor es mayor o igual que el
segundo.
 */
?>
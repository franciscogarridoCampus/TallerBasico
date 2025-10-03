<?php
/*
1. Defina dos variables con valores numéricos y realice operaciones aritméticas básicas (suma, resta, multiplicación, división, módulo).
2. Use operadores de comparación para verificar si una variable es mayor, menor o igual que la otra.
3. Usa un operador ternario para determinar si una variable es par o impar.
4. Aplica operadores lógicos para verificar si ambas variables son mayores de 10 y muestra un mensaje dependiendo del resultado.
5. Implementa operadores de incremento y decremento y muestra cómo cambian los valores de las variables.
*/

//1
$numero1=11;
$numero2=12;
echo "El primer número es: $numero1, y el Segundo número es: $numero2";
echo "</br></br>";
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicación=$numero1*$numero2;
$división=$numero1/$numero2;
$módulo=$numero1%$numero2;

echo "Suma:  $suma, Resta:  $resta,Multiplicación:  $multiplicación,División:  $división,Módulo:  $módulo ";

echo "</br></br>";
echo "</br></br>";
//2

if($numero1 > $numero2){

    echo "El Primer número: $numero1 es mayor que el Segundo Número:  $numero2";
}else if($numero1 < $numero2){
    echo "El Primer número: $numero1 es menor que el Segundo Número:  $numero2";
}else if($numero1==$numero2){
    echo "El Primer número: $numero1 es igual que el Segundo Número: $numero2";
}

echo "</br></br>";
echo "</br></br>";
//3
$numero3=3;

if($numero3%2==0){

    echo "El número : $numero3 es par";
}else{
    echo "El número : $numero3 es impar";
}

echo "</br></br>";
echo "</br></br>";
//4
$numero4=15;
$numero5=5;
if ($numero4 > 10 && $numero5 > 10) {
    echo "Ambas variables son mayores que 10.";
} elseif ($numero4 > 10 || $numero5 > 10) {
    echo "Solo una de las variables es mayor que 10.";
} else {
    echo "Ninguna de las variables es mayor que 10.";
}

echo "</br></br>";
echo "</br></br>";
//5
$numero6 = 5;
echo "</br></br>";
echo "Valor inicial: $numero6";
echo "</br></br>";
$numero6++; 
echo "Después de incrementar: $numero6";
echo "</br></br>";

$numero6--; 
echo "Después de decrementar: $numero6";



?>
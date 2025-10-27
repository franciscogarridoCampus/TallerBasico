<?php
//Lleva doble _ al usar DIR
/*
include __DIR__ . '/interfaces/Ianimal.php';
include __DIR__ . '/class/perro.php';
include __DIR__ . '/class/gato.php';
*/
//PRUEBA CON REQUIERE:
//LLamar animales
require __DIR__ . '/interfaces/Ianimal.php';
require __DIR__ . '/class/perro.php';
require __DIR__ . '/class/gato.php';
//Llamar los vehiculos
require __DIR__ . '/interfaces/Ivehiculo.php';
require __DIR__ . '/class/abstractTransporte.php';
require __DIR__ . '/class/bicicleta.php';

//Animales
$oPerro = new Perro();
$oPerro->hacerSonido();

echo "<br>";
$oGato = new Gato();
$oGato->hacerSonido();

//Vehiculos
echo "<br>";
echo "<br>";
$bici= new bicicleta();

$bici -> arrancar();
echo "<br>";
$bici -> detener();
?>

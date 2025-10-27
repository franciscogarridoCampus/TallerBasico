<?php
//Lleva doble _ al usar DIR
/*
include __DIR__ . '/interfaces/Ianimal.php';
include __DIR__ . '/class/perro.php';
include __DIR__ . '/class/gato.php';
*/
//Prueba con require:
require __DIR__ . '/interfaces/Ianimal.php';
require __DIR__ . '/class/perro.php';
require __DIR__ . '/class/gato.php';
$oPerro = new Perro();
$oPerro->hacerSonido();

echo "<br>";
$oGato = new Gato();
$oGato->hacerSonido();
?>

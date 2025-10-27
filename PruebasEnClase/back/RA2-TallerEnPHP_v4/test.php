<?php
//Lleva doble _
include __DIR__ . '/interfaces/Ianimal.php';
include __DIR__ . '/class/perro.php';
include __DIR__ . '/class/gato.php';

$oPerro = new Perro();
$oPerro->hacerSonido();

echo "<br>";
$oGato = new Gato();
$oGato->hacerSonido();
?>

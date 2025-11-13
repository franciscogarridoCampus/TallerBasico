<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}

?>
<h2>Zona privada</h2>
<?php 
    class Coche{
        public $marca;
        public $modelo;
        public $anio;

        public function __construct($marca,$modelo,$anio){

            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->anio=$anio;

        }

        public function acelerar(){
            echo "El coche de la marca: $this->marca y del modelo: $this->modelo de este año: $this->anio esta acelerando";
        }
    }
    $coche= new Coche("Toyota", "Corolla", 2022);
    $coche->acelerar();

?>
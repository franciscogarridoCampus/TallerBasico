<?php

    class Persona{
        public $nombre;
        public $apellido1;
        public $edad;

        public function __construct($minombre,$miapellido,$miedad){ //era doble _ al aldo de construct pro eso no me cargaba

            $this->nombre=$minombre;
            $this->apellido1=$miapellido;
            $this->edad=$miedad;
        }

        public function saludar(){

            echo "Hola me llamo  $this->nombre  y tengo  $this->edad  años"; 
            // tambien puedo ponerlo asi:  
                // echo "Hola me llamo" .  $this->nombre . "y tengo" . $this->edad . "años";
        }

    }

    $oPersona = new Persona("Francisco", "Garrido", 20);
    $oPersona ->saludar();

?>
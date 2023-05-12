<?php

    include_once("pasajero.php");

    class PasajeroEsp extends Pasajero {
        private $requiereSillaRuedas;
        private $requiereAsistencia;
        private $requiereComida;

        public function __construct($nombre, $apellido, $nDoc, $telefono, $requiereSillaRuedas, $requiereAsistencia, $requiereComida){
            parent::__construct($nombre, $apellido, $nDoc, $telefono);
            $this->requiereSillaRuedas = $requiereSillaRuedas;
            $this->requiereAsistencia = $requiereAsistencia;
            $this->requiereComida = $requiereComida;
        }

        public function getRequiereSillaRuedas(){
            $this->requiereSillaRuedas;
        }

        public function setRequiereSillaRuedas($requiereSillaRuedas){
            $this->requiereSillaRuedas = $requiereSillaRuedas;
        }

        public function getRequiereAsistencia(){
            $this->requiereAsistencia;
        }

        public function setRequiereAsistencia($requiereAsistencia){
            $this->requiereAsistencia = $requiereAsistencia;
        }

        public function getRequiereComida(){
            $this->requiereComida;
        }

        public function setRequiereComida($requiereComida){
            $this->requiereComida = $requiereComida;
        }

        public function __toString(){
            $cadena = parent::__toString();
            $cadena .= "Requiere Silla de ruedas: " . $this->getRequiereSillaRuedas() . "\n" .
            "Requiere Asistencia: " . $this->getRequiereAsistencia() . "\n" . 
            "Requiere comida especial: " . $this->getRequiereComida() . "\n";
        }
    }
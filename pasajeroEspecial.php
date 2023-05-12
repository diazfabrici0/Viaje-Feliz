<?php

    include_once("pasajero.php");

    class PasajeroEsp extends Pasajero {
        private $requiereSillaRuedas;
        private $requiereAsistencia;
        private $requiereComida;

        public function __construct($nombre, $apellido, $nDoc, $telefono, $numAsiento, $numTicket, $requiereSillaRuedas, $requiereAsistencia, $requiereComida){
            parent::__construct($nombre, $apellido, $nDoc, $telefono, $numAsiento, $numTicket);
            $this->requiereSillaRuedas = $requiereSillaRuedas;
            $this->requiereAsistencia = $requiereAsistencia;
            $this->requiereComida = $requiereComida;
        }

        public function getRequiereSillaRuedas(){
           return $this->requiereSillaRuedas;
        }

        public function setRequiereSillaRuedas($requiereSillaRuedas){
            $this->requiereSillaRuedas = $requiereSillaRuedas;
        }

        public function getRequiereAsistencia(){
           return $this->requiereAsistencia;
        }

        public function setRequiereAsistencia($requiereAsistencia){
            $this->requiereAsistencia = $requiereAsistencia;
        }

        public function getRequiereComida(){
           return $this->requiereComida;
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
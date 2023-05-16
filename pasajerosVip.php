<?php

include_once('pasajero.php');

    class PasajeroVip extends Pasajero{
        private $numViajeroFrecuente;
        private $cantMillasPasajero;

        public function __construct($nombre, $apellido, $nDoc, $telefono, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillasPasajero){
            parent::__construct($nombre, $apellido, $nDoc, $telefono, $numAsiento, $numTicket);
            $this->numViajeroFrecuente = $numViajeroFrecuente;
            $this->cantMillasPasajero = $cantMillasPasajero;
        }

        public function getNumViajeroFrecuente(){
            return $this->numViajeroFrecuente;
        }

        public function setNumViajeroFrecuente($numViajeroFrecuente){
            $this->numViajeroFrecuente = $numViajeroFrecuente;
        }

        public function getCantMillasPasajero(){
            return $this->cantMillasPasajero;
        }

        public function setCantMillasPasajero($cantMillasPasajero){
            $this->cantMillasPasajero = $cantMillasPasajero;
        }

        public function darPorcentajeIncremento(){
            if($this->cantMillasPasajero > 300){
                $porcentaje = 30;
            }else{
                $porcentaje = 35;
            }
            return $porcentaje;
        }

        public function __toString(){
            $cadena = parent:: __toString();
            $cadena.="Número de viajero frecuente: " . $this->getNumViajeroFrecuente() . "\n" . 
            "Cantidad de Millas del pasajero: " . $this->getCantMillasPasajero() . "\n";
            return $cadena;
        }

    }
<?php

include_once("pasajero.php");

    class PasajeroVip extends Pasajero{
        private $numViajeroFrecuente;
        private $cantMillasPasajero;

        public function __construct($nombre, $apellido, $nDoc, $telefono, $numViajeroFrecuente, $cantMillasPasajero){
            parent::__construct($nombre, $apellido, $nDoc, $telefono);
            $this->numViajeroFrecuente = $numViajeroFrecuente;
            $this->cantMillasPasajero = $cantMillasPasajero;
        }

        public function getNumViajeroFrecuente(){
            $this->numViajeroFrecuente;
        }

        public function setNumViajeroFrecuente($numViajeroFrecuente){
            $this->numViajeroFrecuente = $numViajeroFrecuente;
        }

        public function getCantMillasPasajero(){
            $this->cantMillasPasajero;
        }

        public function setCantMillasPasajero($cantMillasPasajero){
            $this->cantMillasPasajero = $cantMillasPasajero;
        }

        public function __toString(){
            $cadena = parent:: __toString();
            $cadena.="Número de viajero frecuente: " . $this->getNumViajeroFrecuente() . "\n" . 
            "Cantidad de Millas del pasajero: " . $this->getCantMillasPasajero() . "\n";
            return $cadena;
        }

    }
<?php 
    class Pasajero {
        private $nombre;
        private $apellido;
        private $nroDoc;
        private $telefono;
        private $numAsiento;
        private $numTicket;
        

        public function __construct($nombre, $apellido, $nroDoc, $telefono, $numAsiento, $numTicket){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->nroDoc = $nroDoc;
            $this->telefono = $telefono;
            $this->numAsiento = $numAsiento;
            $this->numTicket = $numTicket;
        }


        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getNroDoc(){
            return $this->nroDoc;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getNumAsiento(){
            return $this->numAsiento;
        }

        public function getNumTicket(){
            return $this->numTicket;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setNroDoc($nroDoc){
            $this->nroDoc = $nroDoc;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function setNumAsiento($numAsiento){
            $this->numAsiento = $numAsiento;
        }

        public function setNumTicket($numTicket){
            $this->numTicket = $numTicket;
        }

        public function darPorcentajeIncremento(){

            $porcentaje = 10; 
            
            return $porcentaje;
        }


        public function __toString(){

            return "\nNombre: " . $this->getNombre() . 
            "\nApellido: " . $this->getApellido() . 
            "\nNumero de documento: " . $this->getNroDoc() . 
            "\nNumero de telefono: " . $this->getTelefono() . 
            "\nNumero de Asiento: " . $this->getNumAsiento() . 
            "\nNummero de Ticket: " . $this->getNumTicket() .
            "\nPorcentaje de Incremento: " . $this->darPorcentajeIncremento() . "\n";
            
        }
    }
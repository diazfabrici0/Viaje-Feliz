<?php 
    class Pasajero {
        private $nombre;
        private $apellido;
        private $nroDoc;
        private $telefono;

        public function __construct($nombre, $apellido, $nroDoc, $telefono){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->nroDoc = $nroDoc;
            $this->telefono = $telefono;
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

        public function __toString(){
            
        }
    }
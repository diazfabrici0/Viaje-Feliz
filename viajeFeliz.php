<?php

class Viaje {
    // atributos de la clase
    private $origen;
    private $destino;
    private $fecha;
    private $pasajeros = [];

    // constructor de la clase viaje
    public function __construct($origen, $destino, $fecha) {
        $this->origen = $origen;
        $this->destino = $destino;
        $this->fecha = $fecha;
    }

    // metodo para agregar pasajeros al arreglo
    public function agregarPasajero ($nombre, $apellido, $numDoc) {
        $pasajero = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "numero de documento" => $numDoc
        ];
        array_push($this->pasajeros, $pasajero);
    }

    // metodo para obtener la lista de pasajeros
    public function obtenerPasajeros () {
        return $this->pasajeros;
    }

    // metodo para modificar los atributos del viaje
    public function modificarOrigen ($origen) {
        $this->origen = $origen;

    }

    public function modificarDestino ($destino) {
        $this->destino = $destino;
    }

    public function modificarFecha ($fecha) { 
        $this->fecha = $fecha;
    }

    // metodos para modificar los datos de un pasajero
    public function modificarNombre($indice, $nombre) {
        $this->pasajeros[$indice]["nombre"] = $nombre;
    }

    public function modificarApellido ($indice, $apellido) {
        $this->pasajeros [$indice]["apellido"] = $apellido;
    }

    public function modificarDoc ($indice, $numDoc) {
        $this->pasajeros [$indice]["numero de documento"] = $numDoc;
    }
}
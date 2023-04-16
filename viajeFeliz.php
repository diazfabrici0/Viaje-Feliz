<?php

include_once ("responsableV.php");

class Viaje {
  private $codeViaje;
  private $destino;
  private $maxPasajeros;
  private $pasajeros;
  private $responsableV;

  public function __construct($codeViaje, $destino, $maxPasajeros, $responsableV) {
    $this->codeViaje = $codeViaje;
    $this->destino = $destino;
    $this->maxPasajeros = $maxPasajeros;
    $this->responsableV = $responsableV;
    $this->pasajeros = array();
  }

  public function setResponsableV($responsableV){
    $this->responsableV = $responsableV;
  }

  public function getResponsableV(){
    return $this->responsableV;
  }

  public function obtenercodigoViaje() {
    return $this->codeViaje;
  }

  public function ponercodigoViaje($codeViaje) {
    $this->codeViaje = $codeViaje;
  }

  public function obtenerDestino() {
    return $this->destino;
  }

  public function ponerDestino($destino) {
    $this->destino = $destino;
  }

  public function obtenerCantMaxPasajeros() {
    return $this->maxPasajeros;
  }

  public function ponerCantMaxPasajeros($maxPasajeros) {
    $this->maxPasajeros = $maxPasajeros;
  }

  public function obtenerPasajeros() {
    return $this->pasajeros;
  }

  public function agregarPasajero($nombre, $apellido, $numDoc) {
    $this->pasajeros[] = array(
      "nombre" => $nombre,
      "apellido" => $apellido,
      "numDoc" => $numDoc
    );
  }
  
  public function modificarPasajerox($indice, $nombre, $apellido, $numDoc) {
    if($indice >= 0 && $indice < count($this->pasajeros)) {
      $pasajero = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'numDoc' => $numDoc
      ];
      $this->pasajeros[$indice] = $pasajero;
      return true;
    } else {
      return false;
    }
  }

  public function __toString()
  {
    return "Codigo de viaje: " . $this->codeViaje . 
    "\n" . "Destino del viaje: " . $this->destino . 
    "\n" . "Cantidad máxima de pasajeros: " . $this->maxPasajeros . "\n" . 
    $this->responsableV;
  }

  public function mostrarPasajeros() {
    $pasajeros = $this->pasajeros;
    $cadena = "   PASAJEROS \n";
    foreach($pasajeros as $index => $pasajero) {
      $cadena .= "Pasajero " . ($index + 1) . "\n" . "Nombre: " . $pasajero['nombre'] . "\n" . "Apellido: " . $pasajero['apellido'] . "\n" . "Número de Documento: " . $pasajero['numDoc'] . "\n \n";
    }
    return $cadena;
  }

  public function borrarPasajero($numDoc) {
    foreach ($this->pasajeros as $key => $value) {
      if ($value["numDoc"] == $numDoc) {
        unset($this->pasajeros[$key]);
        return true;
      }
    }
  }

}
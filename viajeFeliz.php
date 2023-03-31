<?php

class Viaje {
  private $codeViaje;
  private $destino;
  private $maxPasajeros;
  private $pasajeros;

  public function __construct($codeViaje, $destino, $maxPasajeros) {
    $this->codeViaje = $codeViaje;
    $this->destino = $destino;
    $this->maxPasajeros = $maxPasajeros;
    $this->pasajeros = array();
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

  public function mostrarDatos() {
    echo "Código: " . $this->codeViaje . "\n";
    echo "Destino: " . $this->destino . "\n";
    echo "Cantidad máxima de pasajeros: " . $this->maxPasajeros . "\n";
    echo "Pasajeros: <\n>";
    $pasajeros = $this->pasajeros;
    if(empty($pasajeros)) {
        echo "No hay pasajeros en el viaje<\n>";
      } else {
        echo "\nPasajeros:\n";
        foreach($pasajeros as $index => $pasajero) {
          echo "Pasajero " . ($index + 1) . ":<\n>";
          echo "Nombre: " . $pasajero['nombre'] . "<\n>";
          echo "Apellido: " . $pasajero['apellido'] . "<\n>";
          echo "Número de documento: " . $pasajero['numDoc'] . "<\n><\n>";
        }
      }
  }
}
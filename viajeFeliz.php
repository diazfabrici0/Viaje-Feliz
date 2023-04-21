<?php

include_once ("responsableV.php");
include_once ("pasajero.php");

class Viaje {
  private $codeViaje;
  private $destino;
  private $maxPasajeros;
  private $pasajeros;
  private $responsableV;
  private $colPasajeros;

  public function __construct($codeViaje, $destino, $maxPasajeros, $responsableV, $pasajeros) {
    $this->codeViaje = $codeViaje;
    $this->destino = $destino;
    $this->maxPasajeros = $maxPasajeros;
    $this->responsableV = $responsableV;
    $this->pasajeros = $pasajeros;
    $this->colPasajeros = array();
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

  public function agregarPasajero($pasajeros)  {
    $this->colPasajeros[] = $pasajeros;
  }

  public function agregarPasajero2($pasajeros) {
    $numDoc = $pasajeros->getNroDoc();
    if ($this->buscarPasajero($numDoc) !== null) {
      $cad = "El pasajero con número de documento $numDoc ya está registrado en el viaje.\n" ;
  } else {
    $this->colPasajeros[] = $pasajeros;
      $cad = "El pasajero fue agregado exitosamente.\n";
  }
  return $cad;
  }
  
  public function buscarPasajero($numeroDocumento) {
    foreach ($this->colPasajeros as $pasajero) {
        if ($pasajero->getNroDoc() === $numeroDocumento) {
            return $pasajero;
        }
    }
    return null;
  }

  public function getColPasajeros(){

    return $this->colPasajeros;

  }

  public function setColPasajeros ($colPasajeros){

    $this->colPasajeros = $colPasajeros;

  }
  
public function modificarPasajerox($docModif, $nuevoNombre, $nuevoApellido, $nuevoDoc, $nuevoTelefono){
  $encontrado = false;
  $colPasajeros = $this->colPasajeros;
  foreach($colPasajeros as $index => $pasajeros) {
    if($pasajeros->getNroDoc() == $docModif){
      $pasajeros->setNombre($nuevoNombre);
      $pasajeros->setApellido($nuevoApellido);
      $pasajeros->setNroDoc($nuevoDoc);
      $pasajeros->setTelefono($nuevoTelefono);
      
      $encontrado = true;
      echo "Se modifico el pasajero de manera exitosa \n";
      break;
    }
  }

  if (!$encontrado){
    echo "No se encontró un pasajero con el numero de documento especificado";
  }

}


  public function __toString()
  {

    return "Codigo de viaje: " . $this->obtenerCodigoViaje() . 

    "\n" . "Destino del viaje: " . $this->obtenerDestino() . 

    "\n" . "Cantidad máxima de pasajeros: " . $this->obtenerCantMaxPasajeros() . "\n" . 

    $this->responsableV;

  }

  public function mostrarPasajeros() {

    $colPasajeros = $this->getColPasajeros();

    $cadena = "   PASAJEROS \n";

    foreach($colPasajeros as $index => $pasajeros) {

      $cadena .= "\nPasajero " . ($index + 1)  .   

      "\n\nNombre: " . $pasajeros->getNombre() . 

      "\nApellido: " . $pasajeros->getApellido() .

      "\nNumero de documento: " . $pasajeros->getNroDoc() .

      "\nNumero de telefono: " . $pasajeros->getTelefono(). "\n";

    }
    return $cadena;
  }

  public function borrarPasajero($nDoc) {
    $colPasajeros = $this->colPasajeros;
    foreach ($this->colPasajeros as $key => $pasajeros) {
      if ($pasajeros->getNroDoc() == $nDoc) {
        
        unset($this->colPasajeros[$key]);
        return true;
      }
    }
  }

}
<?php

include_once ("responsableV.php");
include_once ("pasajero.php");

class Viaje {
  private $codeViaje;

  private $destino;

  private $maxPasajeros;

  private $responsableV;

  private $colPasajeros = array();

  private $costoViaje;

  private $sumaCostos;

  private $cantPasajeros;

  public function __construct($codeViaje, $destino, $maxPasajeros, $responsableV, $colPasajeros, $costoViaje, $sumaCostos, $cantPasajeros) {
    $this->codeViaje = $codeViaje;
    $this->destino = $destino;
    $this->maxPasajeros = $maxPasajeros;
    $this->responsableV = $responsableV;
    $this->costoViaje = $costoViaje;
    $this->sumaCostos = $sumaCostos;
    $this->cantPasajeros = $cantPasajeros;
    $this->colPasajeros = $colPasajeros;
  }

  public function getCantPasajeros(){
    return $this->cantPasajeros;
  }

  public function setCantPasajeros($cantPasajeros){
    $this->cantPasajeros = $cantPasajeros;
  }

  public function getSumaCostos(){
    return $this->sumaCostos;
  }

  public function setSumaCostos($sumaCostos){
    $this->sumaCostos = $sumaCostos;
  }

  public function getCostoViaje(){
    return $this->costoViaje;
  }

  public function setCostoViaje($costoViaje){
    $this->costoViaje = $costoViaje;
  }

  public function setResponsableV($responsableV){

    $this->responsableV = $responsableV;

  }

  public function getResponsableV(){

    return $this->responsableV;

  }

  public function getCodigoViaje() {

    return $this->codeViaje;

  }

  public function setCodigoViaje($codeViaje) {

    $this->codeViaje = $codeViaje;

  }

  public function getDestino() {

    return $this->destino;

  }

  public function setDestino($destino) {

    $this->destino = $destino;

  }

  public function getCantMaxPasajeros() {

    return $this->maxPasajeros;

  }

  public function setCantMaxPasajeros($maxPasajeros) {

    $this->maxPasajeros = $maxPasajeros;

  }

  public function getColPasajeros(){

    return $this->colPasajeros;

  }

  public function setColPasajeros ($colPasajeros){

    $this->colPasajeros = $colPasajeros;

  }
  
  public function buscarPasajero($numeroDocumento) {

    foreach ($this->colPasajeros as $pasajero) {

        if ($pasajero->getNroDoc() === $numeroDocumento) {

            return $pasajero;

        }
    }
    return null;
  }
  
public function modificarPasajerox($docModif, $nuevoNombre, $nuevoApellido, $nuevoDoc, $nuevoTelefono){
  $encontrado = false;
  $colPasajeros = $this->getColPasajeros();
  $cant = count($colPasajeros);
  for($i = 0; $i < $cant; $i++){
    $objPasajero = $colPasajeros[$i];

    if($objPasajero->getNroDoc() == $docModif){
      $objPasajero->setNombre($nuevoNombre);
      $objPasajero->setApellido($nuevoApellido);
      $objPasajero->setNroDoc($nuevoDoc);
      $objPasajero->setTelefono($nuevoTelefono);

      $encontrado = true;
      $cad = "Se modifico el pasajero de manera exitosa \n";
      break;
    }

  }

  if (!$encontrado){
    $cad = "No se encontró un pasajero con el numero de documento especificado";
  }
  return $cad;
}

public function modificarPasajeroVIP($docModif, $nuevoNombre, $nuevoApellido, $nuevoDoc, $nuevoTelefono, $nroAsiento, $nroTicket, $nroViajeroFrecuente, $cantMillas){
  $encontrado = false;
  $colPasajeros = $this->getColPasajeros();
  $cant = count($colPasajeros);
  for($i = 0; $i < $cant; $i++){
    $objPasajero = $colPasajeros[$i];

    if($objPasajero->getNroDoc() == $docModif){
      $objPasajero->setNombre($nuevoNombre);
      $objPasajero->setApellido($nuevoApellido);
      $objPasajero->setNroDoc($nuevoDoc);
      $objPasajero->setTelefono($nuevoTelefono);
      $objPasajero->setNumAsiento($nroAsiento);
      $objPasajero->setNumTicket($nroTicket);
      $objPasajero->setNumViajeroFrecuente($nroViajeroFrecuente);
      $objPasajero->setCantMillasPasajero($cantMillas);


      $encontrado = true;
      $cad = "Se modifico el pasajero de manera exitosa \n";
      break;
    }

  }

  if (!$encontrado){
    $cad = "No se encontró un pasajero con el numero de documento especificado";
  }
  return $cad;
}

public function modificarPasajeroEsp($docModif, $nuevoNombre, $nuevoApellido, $nuevoDoc, $nuevoTelefono, $nroAsiento, $nroTicket, $requiereSillaRuedas, $requiereAsistencia, $requiereComida){
  $encontrado = false;
  $colPasajeros = $this->getColPasajeros();
  $cant = count($colPasajeros);
  for($i = 0; $i < $cant; $i++){
    $objPasajero = $colPasajeros[$i];

    if($objPasajero->getNroDoc() == $docModif){
      $objPasajero->setNombre($nuevoNombre);
      $objPasajero->setApellido($nuevoApellido);
      $objPasajero->setNroDoc($nuevoDoc);
      $objPasajero->setTelefono($nuevoTelefono);
      $objPasajero->setNumAsiento($nroAsiento);
      $objPasajero->setNumTicket($nroTicket);
      $objPasajero->setRequiereSillaRuedas($requiereSillaRuedas);
      $objPasajero->setRequeireAsistencia($requiereAsistencia);
      $objPasajero->steRequiereComida($requiereComida);


      $encontrado = true;
      $cad = "Se modifico el pasajero de manera exitosa \n";
      break;
    }

  }

  if (!$encontrado){
    $cad = "No se encontró un pasajero con el numero de documento especificado";
  }
  return $cad;
}

  public function hayPasajesDisponibles(){

    $estado = false;

    $cantPasajViaje = $this->getCantPasajeros();

    $cantMax = $this->getCantMaxPasajeros();

    if($cantPasajViaje < $cantMax + 1){

      $estado = true;

    }
    return $estado;
  }

  public function venderViaje($objPasajero){
    $colPasajeros = $this->getColPasajeros();
    $costoViaje = $this->getCostoViaje();
    $costos = $this->getSumaCostos();
    $porcentaje = $objPasajero->darPorcentajeIncremento();
    
    if ($this->hayPasajesDisponibles()){
        array_push($colPasajeros, $objPasajero);
        $this->setColPasajeros($colPasajeros);
        $costoFinal = ($costoViaje * $porcentaje) / 100;
        $costoFinal = $costoFinal + $costoViaje;
        $costos = $costos + $costoFinal;
        $this->setSumaCostos($costos);
    }else {
        $costoFinal = 0;
    }
    return $costoFinal;
}


  public function __toString()
  {

    return "Codigo de viaje: " . $this->getCodigoViaje() . 

    "\n" . "Destino del viaje: " . $this->getDestino() . 

    "\n" . "Cantidad máxima de pasajeros: " . $this->getCantMaxPasajeros() .
    
    "\n" . "Costo del viaje: " . $this->getCostoViaje() .
    
    "\n" . "Costo Total: " . $this->getSumaCostos() .

    $this->responsableV;

  }

  public function mostrarPasajeros(){
    $colPasajeros = $this->getColPasajeros();
    $cant = count($colPasajeros);
    $texto = "";
    for($i = 0; $i < $cant; $i++){
        $texto = $texto . $colPasajeros[$i];
    }

    return $texto;
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
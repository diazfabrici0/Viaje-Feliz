<?php
include 'ViajeFeliz.php';


echo "\n Bienvenido al registro de aerolinea Viaje Feliz \n\n";

$opcion = -1;
$codeViaje = null;
$destino = null;
$maxPasajeros = null;
$indicePasajero = null;

while($opcion != 4) {
  echo "Menú:\n";
  echo "1. Cargar información del viaje\n";
  echo "2. Modificar información del viaje\n";
  echo "3. Ver información del viaje\n";
  echo "4. Salir\n";

  $opcion = readline("Seleccione una opción: ");

  switch($opcion) {
    case 1:
      $codeViaje = readline("Ingrese el código del viaje: ");
      $destino = readline("Ingrese el destino del viaje: ");
      $maxPasajeros = readline("Ingrese la cantidad máxima de pasajeros: ");


<?php

include_once ('pasajero.php');
include_once('pasajerosVip.php');
include_once('pasajeroEspecial.php');


$objPers1 = null;
$objPers2 = null;
$objPers3 = null;

$colPersObj = [$objPers1, $objPers2];

$objPers1 = new Pasajero("Fabricio", "Diaz", 44430320, 2995290874, 7, 77);
$objPers2 = new Pasajero("Ariel", "Ferreyra", 44666666, 29977777, 8, 78);
$objPers3 = new PasajeroEsp("Mauricio", "carrasco", 44433330, 29966666, 10, 79, "si", "si", "si");
$objPers4 = new PasajeroEsp("Fernando", "Aguilarr", 45545555, 29944444, 20, 80, null, null, "no");

echo $objPers1 . "\n" . 
$objPers2 . "\n" . 
$objPers3 . "\n" . 
$objPers4 . "\n";
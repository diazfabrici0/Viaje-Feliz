<?php

include_once("viajeFeliz.php");
include_once("responsableV.php");

$responsableV = new ResponsableV(7, 123, 'juan', 'manuel');

$viaje = new Viaje(1, "arg", 1, $responsableV);

echo $viaje;
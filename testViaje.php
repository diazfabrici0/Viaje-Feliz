<?php

include ("viajeFeliz.php"); 

function verificaValMenu($min, $max)
{
    //int $numero
    echo "Elija una opcion! ";
    $numero = trim(fgets(STDIN));
    while (!is_integer($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entero: ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}

/** Muestra el menú para el usuario
 * @param string $player
 */
function mostrarMenu()
{
    //$opcionElegida
    echo "\n";
    echo "**********************************************************************\n";
    echo "* 1) Registrar un viaje                                              *\n";
    echo "* 2) Modificar datos sobre un viaje                                  *\n";
    echo "* 3) Modificar datos sobre un usuario                                *\n";
    echo "* 4) Agregar una persona a un viaje                                  *\n";
    echo "* 5) Salir                                                           *\n";
    echo "********************************************************************** \n";
}

/** Guarda a los usuarios en un arreglo asociativo 
 * @param int $nNames
 * @return array
 */
function leerPasaj ($nNames){
    $arrayPasajero = [];
    $n = $nNames;
    for ($i = 0; $i <= $n-1; $i++) {
        echo "ingrese el nombre: \n";
        $nombre = trim(fgets(STDIN));
        echo "ingrese el apellido: \n";
        $apellido = trim(fgets(STDIN));
        echo "ingrese el documento: \n";
        $documento = trim(fgets(STDIN));

        array_push ($arrayPasajero, $nombre, $apellido, $documento);
    }
    return $arrayPasajero;
}


// PROGRAMA PRINCIPAL

$minMenu = 1;
$maxMenu = 5;

$coleccionPasajeros = [];

$origen;
$destino;
$fecha;

$nombre;
$apellido;
$nDoc;

$nPasajeros;

echo "\n Bienvenid@ \n";

do {
    mostrarMenu();
    $opcionElegida = verificaValMenu($minMenu, $maxMenu);

    switch($opcionElegida) {

        case 1:
            echo "ingrese el punto de origen del viaje: \n";
            $origen = trim(fgets(STDIN));

            echo "ingrese el destino: \n";
            $destino = trim(fgets(STDIN));

            echo "Ingrese la fecha: ";
            $fecha = trim(fgets(STDIN));

            echo "Ingrese el numero de pasajeros: ";
            $nPasajeros = trim(fgets(STDIN));

            

            $viaje = new Viaje($origen, $destino, $fecha, $nombre, $apellido, $nDoc);

           // $arrayPasajero = leerPasaj($nPasajeros);

            //array_push($coleccionPasajeros, $arrayPasajero);



            //print_r($coleccionPasajeros);

        case 2:

        case 3:

        case 4:
        
        case 5:
    }

} while ($opcionElegida != 5);
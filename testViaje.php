<?php
include 'ViajeFeliz.php';

/** MUESTRA LOS PASAJEROS
 * @param int $cantidadPasajeros
 * @return 
 */


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
      
      $viaje = new Viaje($codeViaje, $destino, $maxPasajeros);
      
      $cantidadPasajeros = readline("Ingrese la cantidad de pasajeros: ");
      for($i = 0; $i < $cantidadPasajeros; $i++) {
        $nombre = readline("Ingrese el nombre del pasajero " . ($i+1) . ": ");
        $apellido = readline("Ingrese el apellido del pasajero " . ($i+1) . ": ");
        $numDoc = readline("Ingrese el número de documento del pasajero " . ($i+1) . ": ");

        $viaje->agregarPasajero($nombre, $apellido, $numDoc);
      }
      
      break;
    case 2:

      $subopcion = -1;
      
      if ($codeViaje != null){

        while($subopcion != 7) {
          echo "Modificar información del viaje:\n";
          echo "1. Modificar código\n";
          echo "2. Modificar destino\n";
          echo "3. Modificar cantidad máxima de pasajeros\n";
          echo "4. Modificar datos de un pasajero\n";
          echo "5. Agregar otro pasajero \n";
          echo "6. Eliminar un pasajero \n";
          echo "7. Salir\n\n";

          $subopcion = readline("Seleccione una opción: ");

          switch($subopcion) {
            case 1:
              if ($codeViaje != null) {
                $codeViaje = readline("Ingrese el nuevo código: ");
                $viaje->ponerCodigoViaje($codeViaje);
              }else{
                echo "Debe haber ingresado un codigo anteriormente \n";
              }
              break;
            case 2:
              if ($destino != null){
                $destino = readline("Ingrese el nuevo destino: ");
                $viaje->ponerDestino($destino);
              }else{
                echo "Debe haber ingresado un destino anteriormente \n";
              }
              break;
            case 3:
              if ($maxPasajeros != null){
                $maxPasajeros = readline("Ingrese la nueva cantidad máxima de pasajeros: ");
                
                $viaje->ponerCantMaxPasajeros($maxPasajeros);
              }else{
                echo "Debe haber ingresado una cantidad maxima de pasajeros anteriormente \n";
              }
              break;
              case 4:
                  if ($indicePasajero >= 0){
                    $indicePasajero = readline("Ingrese el indice del pasajero que desea modificar: ");
                    $nombre = readline("Ingrese el nuevo nombre: ");
                    $apellido = readline("Ingrese el nuevo apellido: ");
                    $numDoc = readline("Ingrese el nuevo número de documento: ");
                    $viaje->modificarPasajerox($indicePasajero, $nombre, $apellido, $numDoc);
                  
                  }else{
                    echo "debe haber ingresado un pasajero anteriormente \n";
                  }
              case 5:
                $nombre = readline("Ingrese el nombre del pasajero " . ($i+1) . ": ");
                $apellido = readline("Ingrese el apellido del pasajero " . ($i+1) . ": ");
                $numDoc = readline("Ingrese el número de documento del pasajero " . ($i+1) . ": ");
        
                $viaje->agregarPasajero($nombre, $apellido, $numDoc);
                break;
            
              case 6:
                $elNum = readline("Ingrese el documento del pasajero que quiere eliminar: ");
                $viaje->borrarPasajero($elNum);
                break;

              case 7:
                echo "Saliendo \n";
                break;
              default:
                echo "Opción inválida\n";
                break;
              break;
          break;
          }
        }
      break;
      }else{
        echo "Debe haber ingresado datos anteriormente para usar esta opcion \n";
      }
      break;
    case 3:
      if ($codeViaje != null) {
        echo $viaje . "\n";
        $pasaj = $viaje->mostrarPasajeros();
        echo $pasaj;
        break;
      }else{
        echo "Debe haber ingresado un viaje anteriormente \n";
      }
      break;
    case 4:
      echo "Saliendo \n";
      break;
    default:
      echo "Opción inválida \n";
      break;
  }
}
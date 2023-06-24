<?php
include_once("pasajero.php");
include_once ("viajeFeliz.php");
include_once ("responsableV.php");
include_once ("pasajerosVip.php");
include_once ("pasajeroEspecial.php");

/**
 * PIDE LOS DATOS DE UN PASAJERO VIP Y LO CONVIERTE EN OBJETO PARA PasajeroVip
 * @return obj $personaVip
 */
function agregarVip(){

  $nombre = readline("Ingrese el nombre del pasajero: ");

  $apellido = readline("Ingrese el apellido del pasajero: ");

  $numDoc = readline("Ingrese el número de documento del pasajero: ");

  $telefono = readline("Ingrese el número de telefono del pasajero: ");

  $numAsiento = readline("Ingrese el número de asiento: ");

  $numTicket = readline("Ingrese el número del ticket: ");

  $numViajeroFrecuente = readline("Ingrese el número de viajero frecuente: ");

  $cantMillasPasajero = readline("Ingrese la cantidad de millas viajadas anteriormente: ");

  $objPersVip = new PasajeroVip($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillasPasajero);

 return $objPersVip;
}
/**
 * PIDE LOS DATOS DE UN PASAJERO ESP Y LO CONVIERTE EN OBJETO PARA PasajeroEsp
 * @return obj
 */
function agregarEsp(){

  $nombre = readline("Ingrese el nombre del pasajero: ");

  $apellido = readline("Ingrese el apellido del pasajero: ");

  $numDoc = readline("Ingrese el número de documento del pasajero: ");

  $telefono = readline("Ingrese el número de telefono del pasajero: ");

  $numAsiento = readline("Ingrese el número de asiento: ");

  $numTicket = readline("Ingrese el número del ticket: ");

  $requiereSillaRuedas = readline("Requiere silla de ruedas?: ");

  $requiereAsistencia = readline("Requiere Asistencia?: ");

  $requiereComida = readline("Requiere comida especial?: ");

  if($requiereSillaRuedas == "no" || $requiereSillaRuedas == "No"){
    $requiereSillaRuedas = null;
  }
  if($requiereAsistencia == "no" || $requiereAsistencia == "No" ){
    $requiereAsistencia = null;
  }
  if($requiereComida == "no" || $requiereComida == "No"){
    $requiereComida = null;
  }

  $objPersEsp = new PasajeroEsp($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket, $requiereSillaRuedas, $requiereAsistencia, $requiereComida);

  return $objPersEsp;
}



echo "\n Bienvenido al registro de aerolinea Viaje Feliz \n\n";

$opcion = -1;
$codeViaje = null;
$destino = null;
$maxPasajeros = null;
$indicePasajero = null;
$responsableV = null;
$pasajero = null;
$telefono = null;
$costo = null;
$sumaCostos = null;
$pasajeros = null;
$colPasajeros = array();




while($opcion != 4) {

  echo "Menú:\n";

  echo "1. Cargar información del viaje\n";

  echo "2. Modificar información del viaje\n";

  echo "3. Ver información del viaje\n";

  echo "4. Salir\n";

  $opcion = readline("Seleccione una opción: ");

  switch($opcion) {

    case 1:

      //REGISTRA RESPONSABLE


      $nroEmpleado = readline("Ingrese el nro del empleado responsable: ");

      $nroLicencia = readline("Ingrese el nro de la licencia del empleado: ");

      $nombreResp = readline ("Ingrese el nombre del empleado: ");

      $apellidoResp = readline ("Ingrese el apellido del empleado: ");
    
      $responsableV = new ResponsableV($nroEmpleado, $nroLicencia, $nombreResp, $apellidoResp);


      //RESGISTRA EL VIAJE

      $codeViaje = readline("Ingrese el código del viaje: ");

      $destino = readline("Ingrese el destino del viaje: ");

      $maxPasajeros = readline("Ingrese la cantidad máxima de pasajeros: ");

      $costo = readline("Ingrese el costo del viaje: ");
      
      $cantidadPasajeros = readline("Ingrese la cantidad de pasajeros: ");

      $viaje = new Viaje($codeViaje, $destino, $maxPasajeros, $responsableV, $colPasajeros, $costo, $sumaCostos, $cantidadPasajeros);


      for($i = 0; $i < $cantidadPasajeros; $i++) {

        $vip = readline("Es un pasajero Vip?: ");

        $especial = readline("Es un pasajero con requerimientos especiales: ");

        echo "Pasajero " . ($i+1) . " : \n"; 

        if($vip == "si" || $vip == "Si" || strtolower($vip) == "sí" || strtolower($vip) == "Sí"){

          $pasajeroVip = agregarVip();

          $sumaCostos = $viaje->venderViaje($pasajeroVip);

        }elseif($especial == "si" || $especial == "Si" || strtolower($especial) == "sí" || strtolower($especial) == "Sí"){

          $pasajeroEsp = agregarEsp();

          $sumaCostos = $viaje->venderViaje($pasajeroEsp);

        }else{

          $nombre = readline("Ingrese el nombre del pasajero: ");

          $apellido = readline("Ingrese el apellido del pasajero: ");
  
          $numDoc = readline("Ingrese el número de documento del pasajero: ");
  
          $telefono = readline("Ingrese el número de telefono del pasajero: ");

          $numAsiento = readline("Ingrese el número de su asiento: ");

          $numTicket = readline("Ingrese su número de ticket: ");

          $pasajeros = new Pasajero($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket);

          $costo = $viaje->venderViaje($pasajeros);
        
        }
    
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

                $viaje->setCodigoViaje($codeViaje);

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

                    $nDoc = readline("Ingrese el documento del pasajero que desea modificar: ");

                    $nombre = readline("Ingrese el nuevo nombre: ");

                    $apellido = readline("Ingrese el nuevo apellido: ");

                    $numDoc = readline("Ingrese el nuevo número de documento: ");

                    $telefono = readline("Ingrese el nuevo número de teléfono: ");

                    $numAsiento = readline("Ingrese su numero de asiento: ");

                    $numTicket = readline("Ingrese su numero de ticket: ");

                    $va = readline("Es un pasajero vip? Si | No " );


                    $va2 = readline("Es un pasajero con necesidades especiales? Si | No");

                    if(strtolower($va) == "si"){

                      $numViajeroFrecuente = readline("Ingrese el numero de viajero frecuente: ");

                      $cantMillasPasajero = readline("Cantidad de millas recorridas: ");

                      $viaje->modificarPasajeroVip($nDoc, $nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket, $numViajeroFrecuente, $cantMillasPasajero);

                    }elseif(strtolower($va2 == "si")){

                      $requiereSillaRuedas = readline("Requiere silla de ruedas?: ");

                      $requiereAsistencia = readline("Requiere asistencia?: ");

                      $requiereComida = readline("Requiere comida especial?: ");

                      $viaje->modificarPasajeroEsp($nDoc, $nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket, $requiereSillaRuedas, $requiereAsistencia, $requiereComida);
                    }else{
                      $viaje->modificarPasajerox($nDoc, $nombre, $apellido, $numDoc, $telefono);
                    }

                    break;
                  
                  }else{

                    echo "debe haber ingresado un pasajero anteriormente \n";

                  }
                  
              case 5:

                $vip = readline("Es un pasajero Vip?: ");

                $especial = readline("Es un pasajero con requerimientos especiales: ");
        
                if($vip == "si" || $vip == "Si" || strtolower($vip) == "sí" || strtolower($vip) == "Sí"){
        
                  $pasajeroVip = agregarVip();
        
                  $costos = $viaje->venderViaje($pasajeroVip);
        
                }elseif($especial == "si" || $especial == "Si" || strtolower($especial) == "sí" || strtolower($especial) == "Sí"){
        
                  $pasajeroEsp = agregarEsp();
        
                  $costos = $viaje->venderViaje($pasajeroEsp);
        
                }else{
        
                  $nombre = readline("Ingrese el nombre del pasajero: ");
        
                  $apellido = readline("Ingrese el apellido del pasajero: ");
          
                  $numDoc = readline("Ingrese el número de documento del pasajero: ");
          
                  $telefono = readline("Ingrese el número de telefono del pasajero: ");
        
                  $numAsiento = readline("Ingrese el número de su asiento: ");
        
                  $numTicket = readline("Ingrese su número de ticket: ");
        
                  $pasajeros = new Pasajero($nombre, $apellido, $numDoc, $telefono, $numAsiento, $numTicket);
        
                  $costo = $viaje->venderViaje($pasajeros);

                  if($costo > 0 ){
                    echo "Se agrego el pasajero con exito";
                  }else{
                    echo "No se pudo agregar el pasajero";
                  }
                
                }
                break;
            
              case 6:

                $elNum = readline("Ingrese el documento del pasajero que quiere eliminar: ");

                $viaje->borrarPasajero($elNum);
                echo "\nPasajero eliminado exitosamente!\n";
                
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

      echo "Saliendo";

      break;

    default:

      echo "Opción inválida \n";

      break;
  }
}
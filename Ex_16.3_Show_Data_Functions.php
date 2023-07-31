<!--
  Este documento puede acceder a los elementos del array $_GET[] porque estructuralmente al hacer un include es como si este documento estuviera incrustado en ejemplo16_Recibir.php

  En la función mostrarCiudad() verificamos si la variable está seteada y retornamos su valor para mostrarlo por pantalla. Lo que sucede aquí es que nunca se llega a ejecutar el 'else' debido a que la variable '$_GET['ciudad'] siempre existe, aunque su valor sea ''

  Lo mismo sucede con la función mostrarFecha() en la que nunca se llega a ejecutar el último else. En cualquier caso verificamos que la variable $_GET['fecha'] tenga el valor 'Pendiente' para comprobar si los datos provienen del formulario o de la URL forzada.

  A través del formulario introducimos la fecha mediante un input de tipo date, esto significa que ese dato se convierte en un string, por lo que para mostrarlo mediante otro formato es necesario convertir ese valor en segundos UNIX, para eso usamos el método strtotime($fecha), string to time.
-->

<?php
  function mostrarCiudad(){
    if (isset($_GET['ciudad'])) {
      //var_dump($_GET['ciudad']);

      if (strlen($_GET['ciudad'] > 0)) {
        $ciudad = $_GET['ciudad'];
      }
      else{
        $ciudad = 'NO SE HA DEFINIDO CIUDAD';
      }
    }
    return $ciudad;
  }

  function mostrarFecha(){

    // Comprobaremos si existe el valor
    if (isset($_GET['fecha'])) {

      if (strlen($_GET['fecha']) > 0) {
        // Si tiene el valor 'Pendiente' (hemos pulsado el enlace forzando el envío GET)
        if ($_GET['fecha'] == 'Pendiente') {
          $fechaFormateada = 'Te avisaremos cuando haya una fecha disponible';
        }
        else {
          // Si no, venimos del formulario
          $fecha = $_GET['fecha'];
          $tiempo = strtotime($fecha);
          $fechaFormateada = date('l, d, F Y', $tiempo);

          //var_dump($_GET['fecha']);
          //var_dump($tiempo);
        }
      }
      else {
      // Si no está definida es que hemos accedido directamente a esta página sin pasar por el formulario
      $fechaFormateada = 'NO SE HA ELEGIDO FECHA';
    }
    }
    return $fechaFormateada;
  }
?>
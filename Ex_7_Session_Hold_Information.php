<!-- 
  Mantenimiento de estado - pasos:
  1. Autenticación del usuario
  2. Iniciar sesión (en el sitio web)
  3. Trabajar con la sesión
  4. Finalizar sesión (destruir sesión mediante método)
-->

<?php
  session_start();
  //Comprueba si la variable $_SESSION['temps'] (nombre por defecto) está definida y le asigna un valor.

  if (!isset($_SESSION["temps"])) {
    $_SESSION["temps"] = 0;
  } else {
    $_SESSION["temps"] = time();
    session_destroy(); // Cuando se ejecuta esta función se detruye todo lo creado durante la sesión, hasta que no se recarge la página seguimos pudiendo acceder a las variables creadas.
  }
  // Cada vez que recargemos la página el valor de $_SESSION['temps'] pasará de 0 al valor de time(), esto se debe a la función session_star()
  echo $_SESSION["temps"];
  // Podemos ver el valor de $_SESSION['temps'] aun cuando se ha ejecutado session_destroy() gracias a que no se ha recargado la página todavía

  # session_start() crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.

  # $_SESSION es un array asociativo que contiene variables de sesión disponibles para el script actual. Es una 'SUPERGLOBAL' lo que significa que es un array cuyos elementos están disponibles en cualquier parte del script.
  
  #session_destroy() destruye toda la información asociada con la sesión actual. No destruye ninguna de las variables globales asociadas con la sesión, ni destruye la cookie de sesión. Devuelve un valor booleano: true o false. Para volver a utilizar las variables de sesión se debe llamar a session_start().

  # https://www.php.net/manual/es/ref.session.php

  $matriz = array(1,1,2,2,3,3,4,4,5,5);
  var_dump($matriz); // var_dump() sirve para ver el valor y el tipo de dato de una variable
?>
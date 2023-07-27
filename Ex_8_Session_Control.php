<!-- 
  Este proceso de inicio de sesión con session_start() se produce después de que el usuario se haya autenticado y se haya validado sus credenciales en la base de datos correspondiente.

  Mediante el manejo de la sesión y de las cookies controlamos si un usuario a accedido de manera correcta a un servidor.
 -->

<?php
  session_start();

  // Comprobamos si la variable está definida y en caso negativo le asignamos un valor.
  if (!isset($_SESSION['Usuario'])) {
    $_SESSION['Usuario'] = 'Onliner';
  } else {
    $_SESSION['Usuario'] = null; // A diferencia de JavaScript donde null es un tipo de dato, en PHP null es vacío.
  }

  switch ($_SESSION['Usuario']) { //Dependiendo del valor de la variable mostramos un determinado valor
    case 'Onliner':
      echo 'El valor de la variable de sesión es '.$_SESSION['Usuario'];
      break;
    
    default:
      echo 'La variable de sesión no está definida';
      break;
  }  
?>
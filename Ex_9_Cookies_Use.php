<!--

-->

<?php
  # Si es la primera vez que cargamos el archivo la cookie no estará definida
  if (!isset($_COOKIE['repeticiones'])) {
    # Creamos la cookie dándole el nombre de repeticiones, valor de 10 y una duración de 5 segundos
    setcookie('repeticiones', 10, time() + 5);
    echo 'Se ha creado la cookie';

    # Si queremos ver el valor de la cookie nos da error, porque es como si no existiera. Una vez recargamos la página podemos ver su valor, el cuál aunque lo introduzcamos como tipo number, lo recuperamos como string.
    echo $_COOKIE['repeticiones'];

  } else {
    # Si la cookie ya está definida accedemos a su valor y lo guardamos dentro de la variable $veces
    echo 'Ya está definida la cookie <br>';
    $veces = $_COOKIE['repeticiones'];

    # Usamos $veces como valor máximo para las iteraciones del bucle for
    for ($i=0; $i < $veces; $i++) { 
      echo 'Esta es la repetición número: '.($i + 1).'<br>';
    }
  }
  var_dump($_COOKIE['repeticiones']);
?>
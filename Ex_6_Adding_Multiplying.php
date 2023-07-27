<?php

  /* Crear un código en php, que haga dos operaciones a la vez:
    - Sumar 10 primeros números pares
    - Multiplicar 10 primeros números impares
  */

  $sumarPares = 0;
  $multiImpares = 1;

  for ($i=0; $i <=20 ; $i++) { 
    # Si el módulo de $i entre 2 es cero implica que no hay resto por lo que es un número par.
    if ($i % 2 == 0) {
      $sumarPares += $i;
    } 
    else {
      $multiImpares *= $i;
    }
  }

  echo 'La suma de los 10 primeros números pares es: '.$sumarPares.'<br>';
  echo 'El producto de los 10 primeros números impares es: '.$multiImpares.'<br>';
?> 
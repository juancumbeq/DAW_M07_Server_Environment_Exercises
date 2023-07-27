<!--
  En este ejemplo partimos de una tupla de tres pares de elementos.
  En $opcionElegida guardamos el valor del elemento $opciones['b'].
  Mostramos el valor de dicha variable por pantalla.
  Usamos el valor de $opcionElegida para crear una cookie llamada 'eleccion' que lleva el mismo valor.
  Informamos de la creación de dicha cookie.

  Si cargamos la parte 1 en el navegador veremos:
      Soy vegetariano
      Cookie establecida
  
  Y si antes de 10 segundos cargamos la parte 2 veremos:
      Compre gazpacho

  Esto es gracias a que la cookie existe durante 10 segundos y cuyo valor es 'soy vegetariano'
-->
<?php
  $opciones = [
    'a' => 'Soy vegano',
    'b' => 'Soy vegetariano',
    'c' => 'Soy flexitariano'
  ];

  $opcionElegida = $opciones['b'];
  echo $opcionElegida.'<br>';
  setcookie('eleccion', $opcionElegida, time() + 10);
  echo "Cookie establecida";
?>
<!--
  En esta segunda parte del ejemplo 10 verificamos la existencia de la cookie creada en la primera parte.
  Si la cookie ya existe pasamos a comprobar su valor, el cuál si cumple las condiciones mostraremos 'Compre gazpacho', en caso contrario mostraremos 'Compre pollo'.
  Si la cookie no existe mostramos por pantalla 'Compre gazpacho o pollo'.

  Si cargamos la parte 1 en el navegador veremos:
      Soy vegetariano
      Cookie establecida
  
  Y si antes de 10 segundos cargamos la parte 2 veremos:
      Compre gazpacho

  Esto es gracias a que la cookie existe durante 10 segundos de modo que cuando se ejecuta el 'isset' este da como resultado true puesto que el valor de la cookie es 'Soy vegetariano'
-->

<?php
  if (isset($_COOKIE['eleccion'])) {
    if($_COOKIE['eleccion']=='Soy vegano'||
    $_COOKIE['eleccion']=='Soy vegetariano'){
      echo 'Compre gazpacho';
    }
    else {
      echo 'Compre pollo';
    }
  } 
  else {
    echo 'Compre gazpacho o pollo';
  }
?>
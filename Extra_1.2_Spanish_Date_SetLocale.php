<?php
  setlocale(LC_TIME,'es_ES.UTF-8', 'esp');
  $formatoFechaHora = "%j: %A, %d de %B de %Y %H:%M%:%S";
  $strf = strftime($formatoFechaHora); # Ya no sirve, está en desuso
  
  # Fecha completa
  echo $strf;

  # No funciona
?>
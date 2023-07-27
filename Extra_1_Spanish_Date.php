<?php
  # setlocale(LC_ALL, 'es_ES');
  $time = time();
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  $díaSemana = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

  echo 'EJERCICIO 1 - MOSTRAR FECHA EN CASTELLANO <br>';

  # Número de día del año y día de la semana en castellano
  # Para que se muestra el día de la semana en castellano creamos un array de strings con los días de la semana. Luego mediante el método date obtenemos el número del día de la semana (1-7) y le restamos uno porque los elementos del array comienzan desde el 0.
  echo '<b>'.date("z ").$díaSemana[date("N")-1].'</b> <br>';

  # Fecha completa con mes en castellano
  echo '<b>'.$díaSemana[date("w")-1].date(" d ").$meses[date("n")-1].date(" o").'</b> <br>';

  # Horas minutos y segundos con dos dígitos
  echo '<b>'.date("g:i:s").'</b> <br>';

  # Más detalle en https://www.baulphp.com/convertir-fecha-php-en-espanol/
?>
<?php
  $time =  time();
  echo $time;
  $hoy = 64651692022;

  echo '<h1> Mostramos la feha de diferentes maneras: </h1>';

  /* SENTENCIA: EL PRIMER PAR DE COMILLAS ES UNA CADENA DE TEXTO. EL RESTO ES UNA CONCATENACIÓN DE STRINGS, MÉTODO DATE Y VARIABLES */
  /* MÉTODO DATE:  date(string $format, int $timestamp = time()): string
    donde (string $format) es un parámetro de tipo string
    y (int $timestamp = time()) es un valor numérico entero que tiene que venir dado por el método time(), el cuál devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT). $timestamp es opcional y por defecto es el valor de time(), decir que si no lo ponemos es como si lo pusieramos.

    El string que recibe en el parámetro $format debe seguir una nomeclatura, ver en https://www.php.net/manual/es/function.date.php
    El método date devuelve un string.
  */
  echo 'Utilizando el método: date("Y-m-d", $t):'.'<b>'.date("Y-m-d-z", $time).'</b> <br>';

  /* \of se usa para evitar que php interprete esa parte del string como parte del parámetro string que pasamos al método */
  echo 'Utilizando date("l jS \of F Y H:i:s A"):'.'<b>'.date("l jS \of F Y H:i:s A", $time).'</b> <br>';

  /* Con date("U") estamos obteniendo los segundos desde la época unix, ese valor es usado por getdate() como parámetro o timestamp. El método getdate() devuelve un array del tipo:
  Array
(
    [seconds] => 40
    [minutes] => 58
    [hours]   => 21
    [mday]    => 17
    [wday]    => 2
    [mon]     => 6
    [year]    => 2003
    [yday]    => 167
    [weekday] => Tuesday
    [month]   => June
    [0]       => 1055901520
) */
  $fecha = getdate(date("U"));

  /* Otra manera de mostrar la fecha, mediante el nombre de los elementos del array accedemos a cada uno de sus valores */
  echo 'Utilizando getdate(date("U")); muestra '.'<b>'."$fecha[weekday], $fecha[month] $fecha[mday], $fecha[year] - $fecha[hours]:$fecha[minutes]:$fecha[seconds]".'</b> <br>';
?>


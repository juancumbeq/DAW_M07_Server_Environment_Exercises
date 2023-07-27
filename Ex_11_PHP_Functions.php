<!--
  En este ejemplo estamos usando código php incrustrado dentro de código html.

  Comprobamos si la cookie no está creada, en caso 'true' guardamos dentro de $aleatorio un valor random generado por el método rand(0, 10) con un valor mínimo de 0 y máximo de 10.

  Pasamos a crear una cookie con el nombre de 'valor' y con una duración de 20 segundos. EL valor de la cookie viene definido por lo que obtengamos de la función implode().

  La función implode() une elementos de un array en un string, admite los siguientes parámetros:
    implode(string $separator, array $array): string
  El primer parámetro indica cómo se van a separar los elementos dentro del string y el segundo parámetro es el array del que partimos
  https://www.php.net/manual/es/function.implode.php

  En este ejemplo estamos separando los elementos del string mediante ';' (primer parámetro), y el array del que partimos no está contenido en alguna variable sino que lo formamos al instante por dos elementos: [$aleatorio, time()]

  En las cookies no podemos almacenar datos complejos, solo datos simples. Es por eso que necesitamos usar el método implode(), una cookie no puede almacenar un array o una tupla.

  Mediante el link accedemos a la parte 2 del ejemplo 11.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJEMPLO 11</title>
</head>

<body>
  <h1>CREAMOS UNA COOKIE CON UN VALOR ALEATORIO</h1>
  <?php
    if (!isset($_COOKIE['valor'])) {
      $aleatorio = rand(0, 10);
      // implode convierte una lista/array en un string
      setcookie('valor', implode(';', [$aleatorio, time()]), time() + 20);
    } else {
      # code...
    }
  ?>
  <a href="Ex_11.2_PHP_Functions.php">Ir a la siguiente página</a>
</body>

</html>

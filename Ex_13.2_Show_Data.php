<!--
  Los datos se envían a través de la URL, aquí los podemos ver:
  http://localhost/DAW_FP/Ex_13.2_Show_Data.php?nombre=Juan&apellido=Cumbe

  Este archivo recoge los datos enviados a través del formulario. Para acceder a cada uno de los datos enviados debemos hacer uso de la variable $_GET[], usando el 'name' de cada input para acceder al valor del dato.

  Como podemos deducir por el uso de '[]', $_GET es un array asociativo de variables pasado al script actual vía parámetros URL (también conocida como cadena de consulta). Tenga en cuenta que el array no solo se rellena para las solicitudes GET, sino para todas las solicitudes con una cadena de consulta.

  Esta es una 'superglobal' o una variable automatic global. Significa simplemente que es una variable que está disponible en cualquier parte del script.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 13: Mostrar</title>
</head>

<body>
  <p>
    El nombre introducido es: <?php echo $_GET['nombre']?>, y el apellido es: <?php echo $_GET['apellido']?>
  </p>
  <br>
  <a href="Ex_13_Forms.php">Volver</a>
</body>

</html>
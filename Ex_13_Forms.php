<!--
  action="Ex_13.2_Show_Data.php" -- Indica quién va a procesar los datos del formulario
  method="GET" -- Indica cómo se van a enviar los datos
  name="nombre" -- Indica el nombre que va a tener cada uno de los datos en el envío. Si no usamos name, al pasar los datos no podremos acceder a un dato concreto debido a que no sabemos como llamarlo.

  Este formulario recoge datos de dos inputs, en el momento en el que clicamos en 'submit', esos datos son enviados al fichero 'Ex_13.2_Show_Data.php' a través del método GET.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 13: Formulario</title>
</head>

<body>
  <form action="Ex_13.2_Show_Data.php" method="GET">
    <p>
      Introduce tu nombre <input type="text" name="nombre">
    </p>
    <p>
      Introduce tu apellido <input type="text" name="apellido">
    </p>
    <p>
      <input type="submit">
    </p>
  </form>
</body>

</html>
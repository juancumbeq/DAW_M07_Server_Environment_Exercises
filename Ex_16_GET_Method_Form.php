<!--
  En este ejemplo tenemos un formulario que utiliza el método GET para el envío de datos, es decir, los datos viajan a través de la URL.

  De esta manera podemos forzar el envío de datos configurando previamente una URL que será enviada a otro documento php. Es lo que ocurre con el link del final del documento
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 16: Formulario Forzando un GET</title>
</head>

<body>
  <form action="Ex_16.2_Show_Data.php" method="GET">
    <p>Ciudad: <input type="text" name="ciudad"></p>
    <p>Fecha: <input type="date" name="fecha"></p>
    <input type="submit" name="Enviar">
  </form>

  <a href="Ex_16_Show_Data.php?ciudad=Madrid&fecha=Pendiente">Me puedo presentar en Madrid en cualquier fecha que me den</a>
  <!-- Forzamos la URL con un GET -->
</body>
</html>
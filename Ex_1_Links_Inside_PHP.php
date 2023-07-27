<!DOCTYPE html>
<!--
  EJEMPLO 1: CÓMO INTEGRAR HTML Y PHP EN UN MISMO FICHERO
-->
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJEMPLO 1: HTML Y PHP</title>
</head>

<body>
  <ul>
    <!--COMENTARIO EN HTML-->
    <li>
      <!--ESTA LÍNEA MUESTRA "LO PRIMERO" COMO UN ELEMENTO DE UNA LISTA. LA PALABRA "PRIMERO" ES UN LINK QUE AL CLICAR NOS LLEVA AL DOCUMENTO "HOLA MUNDO.PHP"-->
      <?php echo "Lo <a href='Ex_1.2_Hello_World.php'> primero </a>" ?>
    </li>
    <li>
      <?php echo "Lo segundo" ?>
    </li>
  </ul>
</body>
<!-- ES NECESARIO USAR LA EXTENSIÓN.PHP EN EL ARCHIVO PARA QUE EL SERVIDOR SEA CAPAZ DE DETECTAR EL CÓDIGO PHP. DICHO DE OTRA MANERA EL SERVIDOR PUEDE INTERPRETAR CÓDIGO HTML DENTRO DE UN ARCHIVO PHP Y VICEVERSA. -->

</html>

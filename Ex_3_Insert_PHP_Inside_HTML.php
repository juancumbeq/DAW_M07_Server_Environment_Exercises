<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style type="text/css">
    img{
      width: 200px;
      height: 200px;
    }
  </style>

  <title>EJEMPLO 3: INSERTAR PHP EN HTML</title>
</head>

<body>
  <!-- INSERTAR PHP DENTRO DE HTML -->

  <?php
    # PODEMOS DEFINIR CÓDIGO PHP EN CUALQUIER PUNTO DEL FICHERO
    $direccion = "Ejemplo2_Variable";
    $extension = ".php";
    $imagen = "foto.jpg";
  ?>
  <!-- SEGUIMOS PROGRAMANDO EN HTML E INSERTAMOS DENTRO DE ÉL, EL FRAGMENTO DE PHP PARA COMPLETAR ALGÚN VALOR -->
  <a href="<?php echo $direccion.$extension?>">
    Este enlace se forma a partir de las variables definidas en PHP
  </a> </br>

  <img src="<?php echo $imagen?>" alt="">

</body>

</html>
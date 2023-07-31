<!--
  En este documento realizamos un include() del archivo encargado de mostrar los datos y ejecutamos la función pintaListaCiudades()
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 17: Vista</title>
</head>
<body>
  <h1>Conectando a la base de datos de países</h1>
  <?php
    include 'Ex_17.2_MVC_Controller_Show_Data.php';
    pintaListaCiudades();
  ?>
</body>
</html>
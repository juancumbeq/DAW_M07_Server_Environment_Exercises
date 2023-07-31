<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conectando a la base de datos de países</title>
</head>
<body>
  <form action="ejemplo17_1_Formulario.php" method="POST">
    <input type="submit" value="Añadir Ciudad" name="anyade">
  </form>

  <form action="ejemplo17_1_php" method="get">
    <input type="submit" value="Creciente" name="ordenar">
    <input type="submit" value="Decreciente" name="ordenar">
  </form>

  <?php
    include 'Ex_17B.2_MVC_Controller_Show_Data.php';

    // Si venimos de borrar, eliminamos el elemento antes de pintar
    if (issset($_POST['borrar'])) {
      borrarCiudad($_POST['id']);
    }

    // Si venimos de ordenar, indicamos cómo debemos ordenar la lista
    if (!isset($_GET['ordenar'])) {
      $orden = 'Creciente';
    } else {
      $orden = $_GET['ordenar'];
    }

    pintaListaCiudades($orden);
  ?>
</body>
</html>
<!--
  Vista de nueva ciudad añadida
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Añadido</title>
</head>
<body>
  <?php
    include 'Ex_17B.3_MVC_Model_Data_Handling.php';

    // Siempre venimos del formulario
    // otroDistrito solo estará definida si se ha marcado la casilla

    if (isset($_POST['otroDistrito'])) {
      $distrito = $_POST['nuevoDistrito'];
    }
    else {
      $distrito = $_POST['distrito'];
    }
    $nombreCiudad = $_POST['nombre']; // Nombre nueva ciudad
    $codigoPais = $_POST['pais']; // CountryCode
    $poblacion = $_POST['poblacion']; // Population

    if (añadirCiudad($nombreCiudad, $codigoPais, $distrito, $poblacion)) {
      echo "<h1> Se ha añadido la nueva ciudad </h1>";
      echo "<p>" . $nombreCiudad . "</p>";
      echo "<p>" . $codigoPais . "</p>";
      echo "<p>" . $distrito . "</p>";
      echo "<p>" . $poblacion . "</p>";
    }
    else {
      echo "No se ha podido añadir";
    }
  ?>
  <a href="Ex_17B_MVC_Main_View.php">Pulse para volver al listado</a>
</body>
</html>
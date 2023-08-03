<!--
  Este documento es el encargado de realizar la conexión con la base de datos y cierre de la misma conexión.
-->

<?php
function crearConexion($database)
{

  // Datos de la conexión, recibe por parámetro el nombre de la base de datos
  $host = "localhost";
  $user = "root";
  $password = "";

  // Establecemos la conexión con la base de datos
  $conexion = mysqli_connect($host, $user, $password, $database);

  // La variable $conexión es un objeto compuesto por propiedades de la conexión y métodos que nos permiten saber información y hacer peticiones a la bbd correspondiente
  var_dump($conexion);

  // Si hay un error en la conexión, lo mostramos y detenemos cualquier tipo de ejecución
  if (!$conexion) {
    die("<br> Error de conexión con la base de datos: " . mysqli_connect_error());
  }
  // Si está todo correcto, enviamos la conexión con la base de datos
  else {
    echo "<br> Conexión correcta con la base de datos: " . $database;
  }
  return $conexion;
}

function cerrarConexion($conexion)
{
  mysqli_close($conexion);
}
?>
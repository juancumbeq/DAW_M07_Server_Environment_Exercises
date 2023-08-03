<?php
require "Ex_17B.4_MVC_Model_Database.php";

function getListaCiudades($orden)
{
  // Nos conectamos a la base de datos world
  $DB = crearConexion("world");
  // Definimos la consulta para obtener todos los datos de la tabla city
  if ($orden == "Creciente") {
    $sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population ASC";
  } else {
    $sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population DESC";
  }

  // Hacemos la consulta y guardamos el resultado en $result
  $result = mysqli_query($DB, $sql);

  // Si la consulta ha devuelto algún valor, devolvemos los valores
  if (mysqli_num_rows($result) > 0) {
    return $result;

    // Si no, enviamos un mensaje de error
  } else {
    echo "No hay nada en la lista de ciudades";
  }
  cerrarConexion($DB);
}

function getListaPaises()
{
  $DB = crearConexion("world");
  $sql = "SELECT Code, Name FROM country";

  $result = mysqli_query($DB, $sql);

  if (mysqli_num_rows($result) > 0) {
    return $result;
    // Si no, enviamos un mensaje de error
  } else {
    echo "No hay nada en la lista de paises";
  }
  cerrarConexion($DB);
}

function gestListaDistritos()
{
  $DB = crearConexion("world");
  $sql = "SELECT DISTINCT District FROM city";

  $result = mysqli_query($DB, $sql);

  if (mysqli_num_rows($result) > 0) {
    return $result;
    // Si no, enviamos un mensaje de error
  } else {
    echo "No hay distritos";
  }
  cerrarConexion($DB);
}

function añadirCiudad($nombre, $codigoPais, $distrito, $poblacion)
{
  $DB = crearConexion("world");
  $sql = "INSERT INTO city (Name, CountryCode, District, Population) VALUES ('$nombre','$codigoPais','$distrito','$poblacion')";

  $result = mysqli_query($DB, $sql);

  if ($result) {
    return $result;
    // Si no, enviamos un mensaje de error
  } else {
    echo "Error en la función añadirCiudad.";
  }
  cerrarConexion($DB);
}

function borrarCiudad($identificador)
{
  $DB = crearConexion("world");
  $sql = "DELETE FROM city WHERE ID='".$identificador."'";

  $result = mysqli_query($DB, $sql);

  if ($result) {
    return $result;
    // Si no, enviamos un mensaje de error
  } else {
    echo "Error en la función borrarCiudad.";
  }
  cerrarConexion($DB);
}
?>
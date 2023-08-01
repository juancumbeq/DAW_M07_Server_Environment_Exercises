<?php
  require "Ex_18.3_MVC_Model_Database.php";

  function getIdiomasDeUnaCiudad($ciudad){
    // Nos conectamos a la base de datos world
    $DB = crearConexion("world");

    // Definimos la consulta para obtener los datos. Fijate que tenemos que poner las comillas en el WHERE para comprobar la variable.
    $sql = "SELECT countrylanguage.Language as Idioma FROM city INNER JOIN countrylanguage ON city.CountryCode = countrylanguage.CountryCode WHERE city.Name = '" . $ciudad . "'; ";

    // Hacemos la consulta y guardamos el resultado en $result
    $result = mysqli_query($DB, $sql);

    // Cerramos la conexión
    cerrarConexion($DB);

    // Si la consulta ha devuelto algún valor, devolvemos los valores.
    if (mysqli_num_rows($result) > 0) {
      return $result;
      // Si no, enviamos un mensaje de error
    }
    else {
      echo "No hay nada en la lista de ciudades";
    }
  }

  function getListaCiudades(){
    // Nos conectamos a la base de datos world
    $DB = crearConexion("world");

    // Definimos la consulta para obtener todos los datos de la tabla city
    $sql = "SELECT ID, Name, CountryCode FROM city";

    // Hacemos la consulta y guardamos el resultado en $result
    $result = mysqli_query($DB, $sql);

    // Cerramos la conexion
    cerrarConexion($DB);

    // Si la consulta ha devuelto algún valor, devolvemos los valores.
    if (mysqli_num_rows($result) > 0) {
      return $result;
      // Si no, enviamos un mensaje de error.
    }
    else {
      echo "No hay nada en la lista de ciudades";
    }
  }
?>
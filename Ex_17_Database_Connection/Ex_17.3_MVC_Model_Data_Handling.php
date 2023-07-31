<!--
  Dentro de este documento iniciamos la conexión a la base de datos a través de una función alojada en otro documento, database. En el siguiente código realizamos la petición de los datos al servidor y una vez estos son recibidos los enviamos al controlador a través de un return.
-->

<?php
  require "Ex_17.4_MVC_Model_Database.php";

  function getListaCiudades(){

    // Nos conectamos a la base de datos 'world', mediante la función alojada en Database. De modo que dentro de $DB tenemos lo que en Database es $conexion
    $DB = crearConexion('world');

    // Definimos la consulta para obtener todos los datos de la tabla city
    $sql = 'SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population ASC';

    // Hacemos la consulta y guardamos el resultado en $result
    $result = mysqli_query($DB, $sql);

    // Si la consulta ha devuelto algún valor, devolvemos los valores.
    if(mysqli_num_rows($result) > 0){
      return $result;
    }
    // Si no, enviamos a la vista directamnte un mensaje de error
    else {
      echo 'No hay nada en la lista de ciudades.';
    }

    // Cerramos la conexion, mediante la función alojada en Database
    cerrarConexion($DB);
  }
?>


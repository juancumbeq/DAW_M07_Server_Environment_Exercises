<?php
  function crearConexion($database){

    // Datos de la conexión
    $host = "localhost";
    $user = "root";
    $password = "";

    // Establecemos la conexión con la base de datos
    $conexion = mysqli_connect($host, $user, $password, $database);

    // Si hay un error en la conexión, lo mostramos y detenemos.
    if (!$conexion) {
      die("<br> Error de conexión con la base de datos: " . mysqli_connect_error());
    }
    // Si está todo correcto, enviamos la conexión con la base de datos
    else {
      echo "<br> Conexión correcta con la base de datos: " . $database;
    }
    return $conexion;
  }

  function cerrarConexion($conexion){
    mysqli_close($conexion);
  }
?>
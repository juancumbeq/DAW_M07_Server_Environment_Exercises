<?php
  include 'Ex_17B.2_MVC_Controller_Show_Data.php';

  function pintaListaCiudades($orden){
    $datos = getListaCiudades($orden);
    
    // Si hemos recibido un mensaje de error lo mostramos.
    if (is_string($datos)) {
      echo $datos;
      // Si hemos redibido datos
    }
    else{
      // Construimos la tabla
      echo "<table>\n
              <tr>\n
                <th>Id</th>\n
                <th>Nombre</th>\n
                <th>Código País</th>\n
                <th>Comunida</th>\n
                <th>Población</th>\n
                <th>¿Eliminar?</th>\n
              </tr>\n";
      
      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<tr>\n
                <td>" . $fila["ID"] . "</td>\n
                <td>" . $fila["Name"] . "</td>\n
                <td>" . $fila["CountryCode"] . "</td>\n
                <td>" . $fila["District"] . "</td>\n
                <td>" . $fila["Population"] . "</td>\n
                <td> <form action='Ejemplo17_1_Vista.php' method='POST'>
                        <input type='hidden' name='id' value='" . $fila["ID"] . "'>
                        <input type='submit' name='borrar' value='Borrar'></form></td>\n
              </tr>\n";
              // Añado a cada fila un formulario con un elemento oculto y otro submit que nos llevará a borrar
      };
      echo "<table>\n";
    }
  }

  function listaPaises(){
    $datos = getListaPaises();

    // si hemos recibido un mensaje de error lo mostramos
    if (is_string($datos)) {
      echo $datos;
      // Si hemos recibido datos
    }
    else {
      while ($fila = mysqli_fetch_asssoc($datos)) {
        echo "<option value='" . $fila["Code"] . "'>" . $fila["Name"] . "</option>";
      }
    }
  }

  function listaDistritos(){
    $datos = gestListaDistritos();
    if (is_string($datos)) {
      echo $datos;
    } else {
      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<option value='" . $fila["District"] . "'>" . $fila["District"] . "</option>";
      }
    }
  }
?>
<?php
  include 'Ex_18.4_MVC_Model_Data_Handling.php';

  function pintaIdiomas($ciudad){
    $datos = getIdiomasDeUnaCiudad($ciudad);
    $resultado = "<ul> \n";

    while ($idioma = mysqli_fetch_assoc($datos)){
      $resultado .= "<li>" . $idioma["Idioma"] . "</li>\n";
    }
    $resultado .= "</ul>";
    return $resultado;
  }

  function pintaListaCiudadesConIdiomas(){
    $datos = getListaCiudades();

    // Si hemos recibido un mensaje de error lo mostramos.
    if (is_string($datos)) {
      echo $datos;
    }
    // Si hemos recibido datos
    else {
      // Construimos la tabla
      echo "<table>\n
              <tr>\n
                <th>Nombre</th>\n
                <th>Código País</th>\n
                <th>Idiomas</th>\n
              </tr>\n";
      
      // Obtenemos cada una de las filas de datos que nos devolvió la consulta
      /* mysqli_fetch_asssoc avanza entre cada uno de los elementos del array que cotniene cada vez que se llama, hasta que no haya más, por eso se puede usar en un while */
      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<tr>\n
              <td>" . $fila["Name"] . "</td>\n
              <td>" . $fila["CountryCode"] . "</td>\n
              <td>" . pintaIdiomas($fila["Name"]) . "</td>\n
            </tr>\n";
            /* La función pintaIdiomas me mostrará los idiomas como una lista dentro de la tabla */
      };
      echo "</table>";
    }
  }
?>





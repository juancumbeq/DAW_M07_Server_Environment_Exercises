<?php
  include 'Ex_17B.3_MVC_Model_Data_Handling.php';

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
      // Obtenemos cada una de las filas de los datos que nos devolvió la consulta.
      // mysql_fetch_assoc avanza entre cada uno de los elementos del array que cotiene cada vez que se llama, hasta que no haya más, por eso se puede usar en un while
      
      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<tr>\n
                <td>" . $fila["ID"] . "</td>\n
                <td>" . $fila["Name"] . "</td>\n
                <td>" . $fila["CountryCode"] . "</td>\n
                <td>" . $fila["District"] . "</td>\n
                <td>" . $fila["Population"] . "</td>\n
                <td> <form action='Ex_17B_MVC_Main_View.php' method='POST'>
                        <input type='hidden' name='id' value='" . $fila["ID"] . "'>
                        <input type='submit' name='borrar' value='Borrar'></form></td>\n
              </tr>\n";
              // Añado a cada fila un formulario con un elemento oculto y otro submit que nos llevará a borrar
      };
      // foreach ($datos as $fila) {
      //   echo "<tr>\n
      //             <td>" . $fila["ID"] . "</td>\n
      //             <td>" . $fila["Name"] . "</td>\n
      //             <td>" . $fila["CountryCode"] . "</td>\n
      //             <td>" . $fila["District"] . "</td>\n
      //             <td>" . $fila["Population"] . "</td>\n
      //         </tr>\n";
      // };
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
      while ($fila = mysqli_fetch_assoc($datos)) {
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
<!--
  Dentro de este documento es donde realizamos y preparamos el contenido que será mostrado en la vista una vez el modelo nos proporicione los datos de las peticiones realizadas. Para recibir los datos como el return de una función alojada en otro fichero es necesario ejecutar un include.
-->

<?php
  include 'Ex_17.3_MVC_Model_Data_Handling.php';

  function pintaListaCiudades(){
    // getListaCiudades() es una función que se encarga de realizar únicamente la consulta, más no la conexión ni el cierre de esta con la base de datos. Es por eso que su return son los datos de dicha consulta
    // El resultado de la consulta lo almacenamos dentro de $datos, el cuál es una tabla virtual que contiene las filas que cumplan las condiciones de nuestra consulta.
    $datos = getListaCiudades();

    // Si hemos recibido un mensaje de error lo mostramos. $datos será un string cuando obtengamos un error al realizar la consulta. Mediante el método 'is_string' comprobamos que se trate de un string.
    if (is_string($datos)) {
      echo $datos; // Si fuera un error simplemente lo mostramos por pantalla

      // Si hemos recibido datos
    }
    else {
      // Construimos la tabla, es decir, la cabecera de una tabla donde vamos a mostrar los datos recibiddos
      echo "<table>\n
              <tr>\n
                <th>ID</th>\n
                <th>Nombre</th>\n
                <th>Código País</th>\n
                <th>Comunidad</th>\n
                <th>Población</th>\n
              </tr>\n";
      
      /* Obtenemos cada una de las filas de datos que nos devolvió la consulta. 'msqli_fetch_assoc' avanza entre cada uno de los elementos del array que contiene cada vez que se llama a la función, hasta que no haya más, por eso se puede usar un while, hecho que se puede traducir en 'mientras haya filas que extraer...'

      'msqli_fetch_assoc' nos devuelve los datos de una fila convertido en array asociativo de tipo clave-valor, dentro de $fila, es por eso que debemos conocer los nombres de los campos/claves para acceder a los valores deseados
      */

      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<tr>\n
                <td>" . $fila["ID"] . "</td>\n
                <td>" . $fila["Name"] . "</td>\n
                <td>" . $fila["CountryCode"] . "</td>\n
                <td>" . $fila["District"] . "</td>\n
                <td>" . $fila["Population"] . "</td>\n
              </tr>\n";
              // Tengamos en cuenta que es necesario conocer cada una de las claves de los elementos del array para poder acceder a su valor. También es importante tener en cuenta que la representación en la vista de la tala se realiza mediante concatenación de strings.
      };

      // Otra manera de recorrer la tabla virtual sería mediante un foreach:
        // foreach ($datos as $fila) {
        //   echo "<tr>\n
        //         <td>" . $fila["ID"] . "</td>\n
        //         <td>" . $fila["Name"] . "</td>\n
        //         <td>" . $fila["CountryCode"] . "</td>\n
        //         <td>" . $fila["District"] . "</td>\n
        //         <td>" . $fila["Population"] . "</td>\n
        //       </tr>\n";
        // }
      echo "</table>\n";
      // Una vez ya no queden más filas por extraer cerramos la tabla, todos los datos estarían mostramos por pantalla.
    };
  }
?>
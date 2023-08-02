<!--
  REPRESENTA LA VISTA - LA CAPA INTERFAZ CON LA QUE INTERACTÚA EL USUARIO

  Este documento representar la vista, del modelo MVC, con la que un usuario interactúa y que está conectado con la capa controlador.

  El método include() al igual que el método require() nos permite acceder a las funciones, métodos y variables que se encuentren en otro documento. Literalmente es como si tuvieramos el código de ese fichero externo incrustado en este mismo documento. Esto nos permite separar funcionalidades para facilitar el mantenimiento de la aplicación. En este ejemplo cada uno de los ficheros externos representa una de las capas del modelo MVC

  La función enumerarElementos() y la variable $compra son elementos que obtenemos de los archivos externos pero que gracias a include() podemos enlazar y hacer funcionar como si estuvieran en el mismo documento

  La única diferencia ente include() y require() es que en caso de error al carga una función, método o variable de un archivo externo, en el primer caso la ejecución del resto de código del script no se detiene, sólo nos muestra un mensaje de error, mientras que con require() sí que lo hace, deteniendo e informando del error.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 12: Importar funciones y variables de otro fichero</title>
</head>

<body>
  <h1>Lista de la compra</h1>
  <ol>
    <?php
      // Importamos las otras partes del proyecto
      include 'ejemplo12_Valores.php';
      include 'ejemplo12_Funciones.php';

      // Llamamos a la función y pedimos los datos
      // $compra es un array de 'ejemplo12_Valores.php'que pasamos como parámetro a 'ejemplo12_Funciones.php' para que proceda a la ejecución de la función con esos valores.
      enumerarElementos($compra);
    ?>
  </ol>
</body>

</html>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJEMPLO 2: VARIABLES EN PHP</title>
</head>

<body>
  <?php
    $texto = "caracteres"; // EN PHP PODEMOS DEFINIR VARIABLES DE VARIAS MANERAS, NO ES NECESARIO ESPECIFICAR EL TIPO.
    $entero = 2021;
    $decimal = 99.9;
    define("constante", 100); // MEDIANTE DEFINE DEFINIMOS CONSTANTES, INDICANDO SU NOMBRE Y SU VALOR. ES UN STRING

    // PARA CONCANTENAR CADENAS DE TEXTO EN PHP, SE USA EL "."
    echo "Esto es una cadena de " .$texto. "</br>"; 

    /* COMO "CONSTANTE" ES UN STRING EN NECESARIO FORMATEAR SU VALOR PARA CONVERTIRLO EN UN ENTERO Y PERMITIR LA OPERACIÓN.
    LAS VARIABLES VAN CON EL SÍMBOLO DEL DOLAR MIENTRAS QUE LAS CONSTANTES NO LO LLEVAN */
    echo "El " .$entero. " es un número entero y podemos hacer cosas con él, como por ejemplo: " .(int)($entero + constante). "</br>";

    /* ESTE MÉTODO NOS PERMITE REDONDEAR UN DECIMAL AL ENTERO MÁS PRÓXIMO */
    echo "Esto también es posible: " .$decimal. " es un número en coma flotante y permite operaciones como: " .round($decimal). "</br>";
  ?>
</body>

</html>

<!--
  Segunda parte del ejemplo 11

  Mediante var_dump() vemos que el tipo de dato y el valor de la cookie creada.

  Dentro de $recuperar guardamos lo que obtenemos del método explode(), el cuál es el proceso inverso de implode().

  explode() devuelve un array de string, siendo cada uno un substring del parámetro string formado por la división realizada por los delimitadores indicados en el parámetro string separator. Admite los siguientes parámetros:
    explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array

    1ro: es un string que indica cuál será el separador del string original
    2do: el string del que se quiere extraer los elementos
    3ro: la cantidad de elementos que queremos extraer
  
  En este ejemplo extraemos como primer elemento [0] el valor aleatorio generado en la primera parte y como segundo elemento [1] el valor de time().

  Mostramos por pantalla mediante estructura html los valores de las variables. Hacemos uso del método date(), usando como valor de timestamp el de la variable $cuando.

  Acto seguido usamos el valor de $valor para indicar el máximo número de iteraciones de un bucle for.

  Es importante tener en cuenta que la duración de la cookie es de solo 20 segundos, de modo que si estando en la parte 2 recargamos la página pasados esos 20 segundos vamos a obtener un error debido a que la cookie ya no existe.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJEMPLO 11 PARTE 2</title>
</head>

<body>
  <?php
    // SI NO HACEMOS LA COMPROBACIÓN Y LA COOKIE EXISTE, DEVOLVERÁ ERROR
    // explode() hace la función contraria a implode(), crea un array a partir de un string estructurado
    var_dump($_COOKIE['valor']);

    $recuperar = explode(';', $_COOKIE['valor']); // Esto es un array
    $valor = $recuperar[0];
    $cuando = $recuperar[1];
  ?>

  <h1>El valor de la cookie es 
    <span> <?php echo $valor;?> </span> creada el 
    <span> <?php echo date('D, d M Y H:i:s', $cuando)?> </span> 
  </h1>

  <?php
    for ($i=0; $i < $valor; $i++) { 
      echo 'Repeticiones </br>';
    }
  ?>
  <a href="Ejemplo11_FuncionesPHP.php">Volver</a>
</body>

</html>
<!--
  Es interesante interpretar cada uno de los inputs como variables que más adelante vamos a rescatar gracias al atributo 'name' y su valor mediante 'value' si es que lo tiene.

  En este ejemplo estamos enviando unos datos recogimos mediante inputs al archivo 'ejemplo14_Mostrar.php' a través del método POST.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 14: Parámetros de un formulario</title>
</head>

<body>
  <form action="Ex_14.2_Show_Data.php" method="POST">
    <label for="producto">Producto</label>
    <input type="text" name="producto"> <br>

    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad"> <br> <br>

    <input type="submit" name="comprar" value="comprar">
  </form>
</body>

</html>
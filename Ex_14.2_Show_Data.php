<!--
  Al igual que con $_GET[], $_POST[] es un array asociativo de variables pasadas al script actual a través del método POST de HTTP. esta es una 'superglobal' o una variable automatic global. Significa simplemente que es una variable que está disponible en cualquier parte del script.

  Si la cookie no está configurada creamos una bajo el nombre de 'lista', con una duración de 200 segundos y sin algún valor.

  Como la variable $listaCompra parte de un valor 'undefined' obtenemos un warning por pantalla, pero esto no evita que inmediatamente después almacenamos los datos de $_POST[''] en su interior y los mostremos por pantalla.

  Seguidamente actualizamos el valor de la cookie al de $listaCompra.

  Si volvemos atrás introduciendo nuevos datos en el formulario y clicando en submit veremos que la cookie ya existe y lo hará durante 200 segundos, guardamos el valor de  esta dentro de $listaCompra y a dicha variable le concatenamos los nuevos datos introducidos. Volvemos a crear una cookie usando como valor el de $listaCompra.

  De esta manera el valor de la cookie cada vez será mayor, dándo como resultado lo que vemos por pantalla.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 14: Mostrar Data</title>
</head>

<body>
  <p>Has comprado
    <?php echo $_POST['cantidad']?> unidades de
    <?php echo $_POST['producto']?>
  </p>

  <h2>Lista total</h2>
  <?php
    // Comprobamos el funcionamiento del atributo 'value' en el formulario
    $submit = $_POST['comprar'];
    var_dump($submit);
    echo $submit . '<br>';

    // -------
    if (!isset($_COOKIE['lista'])) {
      setcookie('lista', '', time() + 200);
    } else {
      $listaCompra = $_COOKIE['lista'];
    }
    // Se pueden utilizar formas contrídas para agilizar la programación ya que '.=' hace lo mismo que: $listaCompra = $listaCompra . $_POST['producto'] . $_POST['cantidad'];

    $listaCompra .= $_POST['producto'] . ' ' . $_POST['cantidad'];
    echo $listaCompra;
    setcookie('lista', $listaCompra.'<br>', time() + 200);
  ?>
  <br>
  <a href="Ex_14_Form_Submit.php">Volver</a>

  <?php
    // Para borrar la cookie, volvemos a crear una cookie indicando que el tiempo de duración de la misma está en el pasado, de esta manera borramos la cookie físicamente.
    // setcookie('lista', '', time() - 10);
    
    // Mediante unset() liberamos la variable en la memoria. Esto también aplica para las variables de sesión como $_GET y $_POST
    // unset($_COOKIE['lista']);
  ?>
</body>

</html>

<!--
  No se puede acceder a una cookie inmediatamente después de configurarla, sino que está estará disponible a partir de la siguiente petición o recargo de página. Es por eso que obtenemos el error de 'Undefined variable: listaCompra'.

  Una solución a esto es establecer la cookie en el formulario, de modo que al acceder a este documento la cookie ya está disponible.
-->
<!--
  En este segunda parte, el documento presente es el que recoge los datos enviados a través del formulario mediante '$_POST'.

  Realizamos un include de un archivo externo para hacer uso de las funciones que este aloja.

  Mostramos el nombre del personaje por pantalla

  A la hora de mostrar las imágenes vemos que dentro del atributo 'src' tenemos código 'php'. Esto nos permite llamar a las funciones del archivo que hemos hecho 'include' pasando como parámetro los datos correspondientes recogidos en $_POST.

  Cada una de de esas funciones nos retorna un string como resultado de un 'switch'. Ese string a su vez es usado como ruta absoluta para el atributo 'src'
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 15: Mostrar</title>

  <style type="text/css">
    img{
      width = 150px;
      height = 130px;
    }
  </style>
</head>
<body style="text-align: center;">

  <?php include 'Ex_15.3_Show_Data_Functions.php';
  echo $_POST['clase'].' '.$_POST['genero'];
  ?>

  <h1>Confirmar personaje</h1>
  <h2><?php echo $_POST['nombre']?></h2>

  <img src="<?php asignaClase($_POST['clase'])?>" alt="">
  <img src="<?php asignaGenero($_POST['genero'])?>" alt="">
  <br>
  <a href="Ex_15_Form.php">Volver</a>
</body>
</html>
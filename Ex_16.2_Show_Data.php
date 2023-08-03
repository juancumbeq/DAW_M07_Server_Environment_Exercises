<!--
  En este documento realizamos un include que nos permite acceder a las funciones de ejemplo16_Funciones.php.

  De este manera podemos ejecutar código php dentro del html.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 16: Recibir Data</title>
</head>
<body>
  <?php include 'Ex_16.3_Show_Data_Functions.php'?>
  
  <h1>Recibimos datos del formulario anterior</h1>
  <p>Has elegido hacer el examen en 
    <span><?php echo mostrarCiudad();?></span> el dia
    <span><?php echo mostrarFecha();?></span>
  </p>
  <a href="Ex_16_GET_Method_Form.html">Volver</a>
</body>
</html>
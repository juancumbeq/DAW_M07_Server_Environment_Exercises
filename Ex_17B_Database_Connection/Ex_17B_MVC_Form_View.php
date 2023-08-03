<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Añadir</title>
</head>
<body>
  <?php
    include 'Ex_17.2_MVC_Controller_Show_Data.php';
  ?>

  <form action="Ex_17B_MVC_Add_View.php" method="POST">

    <label>Nombre ciudad: </label>
    <input type="text" name="nombre">
    <br>

    <label>País: </label>
    <select name="pais" >
      <?php
        listaPaises();
      ?>
    </select>
    <br>

    <label>Distrito: </label>
    <select name="distrito">
      <?php
        listaDistritos();
      ?>
    </select>
    <br>

    <input type="checkbox" name="otroDistrito">
    <label>No está en la lista.</label>
    <br>

    <label>Nuevo distrito: </label>
    <input type="text" name="nuevoDistrito">
    <br>

    <label>Población: </label>
    <input type="number" name="poblacion">
    <br><br>
    <input type="submit" name="Añadir">

  </form>
</body>
</html>
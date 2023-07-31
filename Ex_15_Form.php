<!--
  En este ejemplo tenemos un formulario cuyos datos serán procesados por el archivo 'ejemplo15_Mostrar.php' a través del método 'POST'

  Los campos importantes y de los cuales cogeremos los datos son 'nombre', 'clase' y 'genero'.

  Como podemos ver las opciones del select carecen de atributo 'name', esto es debido a que en el momento en que selecionamos una opción la etiqueta select adopta el 'value' de la opción escogida.

  Los inputs de la selección del género tienen el mismo nombre porque cuando queramos acceder a su valor nos interesa que todas las variables tengan el mismo nombre pero que su valor cambie en función a la selección.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo 15: Procesar un formulario</title>
</head>

<body>
  <h1>Formulario de creación de usuario</h1>

  <form action="Ex_15_Show_Data.php" method="POST" id="creacion">

    <p>Nombre: <input type="text" name="nombre"></p>

    <p>Selecciona una clase:
      <select name="clase" id="selector" form="creacion">
        <option value="profesor">Profesor</option>
        <option value="alumno">Alumno</option>
        <option value="unknown">Unkown</option>
      </select>
    </p>

    <p>Selecciona un género: <br>
      <input type="radio" name="genero" value="masculino">
      <label for="">Masculino</label><br>
      <input type="radio" name="genero" value="femenino">
      <label for="">Femenino</label><br>
      <input type="radio" name="genero" value="neutro">
      <label for="">Neutro</label><br>
    </p>

    <input type="submit" name="accion" value="Enviar">

  </form>
</body>
</html>
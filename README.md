# Server Side Environment - Exercises
Here you can find some exercises I made during my Certificate of Higher Education (HNC). We started from scratch, learning the PHP fundamentals and how to integrate it with other technologies like HTML5 to create forms and SQL to request data from a database.

If you want to try these examples, check the last header, called: **INSTALLATION**. 
<br><br>



## [Example 1: Links_Inside_PHP](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
HTML5 allows us to insert PHP tags inside a web page's body. These tags contain executable PHP code. In this case, we are using the `echo()` function to print a `<a href="#">` tag inside the HTML body, creating a reference to another `.php` file.

``````html
<body>
  <ul>
    <li>
      <!--ESTA LÍNEA MUESTRA "LO PRIMERO" COMO UN ELEMENTO DE UNA LISTA. LA PALABRA "PRIMERO" ES UN LINK QUE AL CLICAR NOS LLEVA AL DOCUMENTO "HOLA MUNDO.PHP"-->
      <?php echo "Lo <a href='Ex_1.2_Hello_World.php'> primero </a>" ?>
    </li>
    <li>
      <?php echo "Lo segundo" ?>
    </li>
  </ul>
</body>
``````

#### _Seen methods:_
- `echo()`
  <br><br>



## [Example 2: Variables](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_2_Variables.php)
In PHP, like many other languages such as JavaScript, it is not necessary to specify the data type when allocating a variable. A remarkable difference is that every variable is prefixed with the symbol `$`. To define and initialize a constant, we use the function `define("MY_CONSTANT", value)`. This allows us to create a constant with a fixed value that cannot be changed throughout the script's execution.

``````php
<?php
    $texto = "caracteres"; 
    $entero = 2021;
    $decimal = 99.9;
    define("constante", 100); 

    echo "Esto es una cadena de " .$texto. "</br>"; 

    echo "El " .$entero. " es un número entero y podemos hacer cosas con él, como por ejemplo: " .(int)($entero + constante). "</br>";

    /* ESTE MÉTODO NOS PERMITE REDONDEAR UN DECIMAL AL ENTERO MÁS PRÓXIMO */
    echo "Esto también es posible: " .$decimal. " es un número en coma flotante y permite operaciones como: " .round($decimal). "</br>";
  ?>
``````

#### _Seen methods:_
- `define()`
- `(int)($variable)`
- `round()`
  <br><br>



## [Example 3: Insert PHP code in a HTML block](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_3_Insert_PHP_Inside_HTML)
This is another example about how HTML5 allows us to insert PHP code by using the `<?php>` tag. In this case, a reference to another file is created through the concatenation of two PHP variables inside a `<a href="#">` tag.

``````php
<body>
  <!-- INSERTAR PHP DENTRO DE HTML -->
  <?php
    $direccion = "Ex_2_Variables";
    $extension = ".php";
    $imagen = "Ex_3.2_photo.jpg";
  ?>

  <a href="<?php echo $direccion.$extension?>">
    Este enlace se forma a partir de las variables definidas en PHP
  </a>
  </br>

  <img src="<?php echo $imagen?>" alt="">

</body>
``````

#### _Seen methods:_
- `echo()`
  <br><br>



## [Example 4: Insert Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_4_Insert_Date.php)
`time()` and `date()` are two PHP methods that we can implement in our code to show the date in many different ways. The `time()` method returns a numeric value representing the actual time in seconds since January 1st, 1970.

On the other hand, the `date()` method requires the value from `time()` to format a date based on the string provided as the first parameter. The `date()` method works in this way: `date(string $format, int $timestamp = time()): string`. It returns a string with the indicated `$format` value. To see more about the syntax, check the [MANUAL](https://www.php.net/manual/es/function.date.php).

A very simple way to handle dates is provided by the `getdate()` method. It returns an associative array based on the provided timestamp: `getdate(int $timestamp = time()): array`. This is how the last `echo` works, where we access an array by using the key words.

``````php
<?php
  $time =  time();
  echo $time;
  $hoy = 64651692022;

  echo '<h1> Mostramos la feha de diferentes maneras: </h1>';

  echo 'Utilizando el método: date("Y-m-d", $t):'.'<b>'.date("Y-m-d-z", $time).'</b> <br>';

  echo 'Utilizando date("l jS \of F Y H:i:s A"):'.'<b>'.date("l jS \of F Y H:i:s A", $time).'</b> <br>';

  $fecha = getdate(date("U"));

  echo 'Utilizando getdate(date("U")); muestra '.'<b>'."$fecha[weekday], $fecha[month] $fecha[mday], $fecha[year] - $fecha[hours]:$fecha[minutes]:$fecha[seconds]".'</b> <br>';
?>
``````

#### _Seen methods:_
- `time()`
- `date()`
- `getdate()`
- `echo()`
  <br><br>



## [Example 5: Login Form](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_5_Login_Form.html)
First contact with form data handling. Every form tag in HTML5 contains `action` and `method` attributes. The first one indicates the PHP file where the data will be sent, in this case: `Ex_2_Variables.php`. The second attribute indicates how the data will be sent. There are two alternatives: `GET` and `POST`. The `GET` method is used when we do not worry about privacy, so the form input data is sent through the URL after the `?` symbol. On the other hand, the `POST` method encrypts the data in the URL, so no one can read it.

``````html
<body>
  <!-- EJEMPLO DE COMO MEDIANTE UN FORMULARIO PODEMOS ENVIAR DATOS A UN ARCHIVO PHP, EN ESTE CASO AL ARCHIVO Ex_2_Variables.php. ESTE ARCHIVO NO HACE NADA CON LOS DATOS, SÓLO LOS RECIBE-->
  <form name="formulario" action="Ex_2_Variables.php" method="post">
    <h1>FORMULARIO WEB</h1>
    <label for="">Usuario</label>
    <input type="text" name="nombre" value=""/>

    <label for="">Contraseña</label>
    <input type="password" name="contraseña" value=""/>

    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="cancelar" value="Cancelar">
  </form>
</body>
``````

#### _Seen methods:_
- `<form action="file.php">`
- `<input type="submit">`
  <br><br>



## [Example 6: Adding & Multiplying](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_6_Adding_Multiplying.php)
In PHP, like in many other languages, we can use the `for()` loop to iterate a task based on certain conditions.

``````php
<?php
  $sumarPares = 0;
  $multiImpares = 1;

  for ($i=0; $i <=20 ; $i++) { 
    # Si el módulo de $i entre 2 es cero implica que no hay resto por lo que es un número par.
    if ($i % 2 == 0) {
      $sumarPares += $i;
    } 
    else {
      $multiImpares *= $i;
    }
  }

  echo 'La suma de los 10 primeros números pares es: '.$sumarPares.'<br>';
  echo 'El producto de los 10 primeros números impares es: '.$multiImpares.'<br>';
?> 
``````

#### _Seen methods:_
- `for()`
  <br><br>



## [Example 7: Sessions - Hold Information](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_7_Session_Hold_Information.php)
PHP has a way to keep information on the server for a specific user for certain periods of time, usually while the application is being used by the mentioned user. This concept is called: SESSION. Sessions are quite useful to keep data throughout the user's visit, such as login data, checkouts, preferences, etc.

Without sessions, the server couldn't remember any information while switching between pages or user actions on the webpage.

When a webpage is requested by a user, PHP creates a unique session (`session_start()`) for that user with an assigned ID, called the session ID.

During the user interaction, data can be stored and retrieved by using the global variable: `$_SESSION`. This variable is an associative array, which means data can be accessed using a key, such as `$_SESSION["temps"]`.

Once the interaction is finished, the method `session_destroy()` can be applied to erase any data related to the current session.

``````php
<?php
  session_start();

  if (!isset($_SESSION["temps"])) {
    $_SESSION["temps"] = 0;
  } else {
    $_SESSION["temps"] = time();
    session_destroy(); 
  }

  echo $_SESSION["temps"];
  # https://www.php.net/manual/es/ref.session.php

  $matriz = array(1,1,2,2,3,3,4,4,5,5);
  var_dump($matriz);
?>
``````

#
### [Example 7.2: Cookies](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_7.2_Cookies.php)
The sessions and cookies are two different mechanisms used by PHP to store data on the server side and client side, respectively.

Cookies are small text files stored inside the client's browser and are used to keep specific client data, such as preferences, login data, etc.

Cookies are sent automatically with every HTTP request to the server, and the server can access the data stored in them by using the global variable `$_COOKIE[]`.

By using the method `setcookie( string $name, string $value = "", int $expires_or_options = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false ): bool`, a cookie can be created.

As we can see, the variable `$_COOKIE` is an associative array, just like `$_SESSION`.

``````php
<?php
  setcookie('Ilerna', 'Hola a todos', time() + 10);
  echo $_COOKIE['Ilerna'];
?>
``````
#### _Seen methods:_
- `session_start()`
- `session_destroy()`
- `time()`
- `!isset()`
- `$_SESSION[]`
- `var_dump()`
- `array()`
- `setcookie()`
  <br><br>



## [Example 8: Control Session](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_8_Session_Control.php)
In the last exercise, we saw how PHP handles sessions. In this exercise, we apply that knowledge in a real-case scenario.

Once a user enters their credentials, PHP executes the `session_start()` method. After that, the existence of a value inside `$_SESSION['Usuario']` is checked. If the result is false, the value is created; otherwise, the data type `null` is assigned as the stored value

``````php
<?php
  session_start();

  if (!isset($_SESSION['Usuario'])) {
    $_SESSION['Usuario'] = 'Onliner';
  } else {
    $_SESSION['Usuario'] = null; // A diferencia de JavaScript donde null es un tipo de dato, en PHP null es vacío.
  }

  switch ($_SESSION['Usuario']) {
    case 'Onliner':
      echo 'El valor de la variable de sesión es '.$_SESSION['Usuario'];
      break;
    
    default:
      echo 'La variable de sesión no está definida';
      break;
  }  
?>
``````

#### _Seen methods:_
- `session_start()`
- `!isset()`
- `$_SESSION[]`
- `switch(){}`
  <br><br>



## [Example 9: Cookies Use](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_9_Cookies_Use.php)
In exercise number 7, we saw how the variable `$_COOKIE[]` works. In this exercise, we implement an example of how data can be manipulated.

Through an `if` block, we check the existence of `$_COOKIE['repeticiones']`. If the result is false, the cookie is created and printed. Otherwise, we access the data stored inside that cookie, assigning it to another variable `$veces`.

After that, a `for()` loop is executed using the value of `$veces` as part of the condition.

``````php
<?php
  if (!isset($_COOKIE['repeticiones'])) {
    # Creamos la cookie dándole el nombre de repeticiones, valor de 10 y una duración de 5 segundos
    setcookie('repeticiones', 10, time() + 5);
    echo 'Se ha creado la cookie';

    # Si queremos ver el valor de la cookie nos da error, porque es como si no existiera. Una vez recargamos la página podemos ver su valor, el cuál aunque lo introduzcamos como tipo number, lo recuperamos como string.
    echo $_COOKIE['repeticiones'];

  } else {
    # Si la cookie ya está definida accedemos a su valor y lo guardamos dentro de la variable $veces
    echo 'Ya está definida la cookie <br>';
    $veces = $_COOKIE['repeticiones'];

    # Usamos $veces como valor máximo para las iteraciones del bucle for
    for ($i=0; $i < $veces; $i++) { 
      echo 'Esta es la repetición número: '.($i + 1).'<br>';
    }
  }
  var_dump($_COOKIE['repeticiones']);
?>
``````

#### _Seen methods:_

- `setcookie()`
- `!isset()`
- `$_COOKIE[]`
- `for(){}`
- `var_dump()`
  <br><br>



## [Example 10: Cookies Programs Use](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_10_Cookies_Programs_Use.php)
In PHP there is no data-type such as tuple, like python or other languages have. In order to create something similar, an associative array is an option. In this data structure values can be stored and accessed by using a key (string or number) instead of a numeric index as in the case of traditional arrays.
````php
<?php
  $opciones = [
    'a' => 'Soy vegano',
    'b' => 'Soy vegetariano',
    'c' => 'Soy flexitariano'
  ];
  $opcionElegida = $opciones['b'];
  echo $opcionElegida.'<br>';
  setcookie('eleccion', $opcionElegida, time() + 10);
  echo "Cookie establecida";
?>
````
In this exeample we are creating a cookie based on a value stored in an associative array.

#
#### [Example 10.2 - Cookies Programs Use](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_10.2_Cookies_Programs_Use.php)
````php
<?php
  if (isset($_COOKIE['eleccion'])) {
    if($_COOKIE['eleccion']=='Soy vegano'||
    $_COOKIE['eleccion']=='Soy vegetariano'){
      echo 'Compre gazpacho';
    }
    else {
      echo 'Compre pollo';
    }
  } 
  else {
    echo 'Compre gazpacho o pollo';
  }
?>
````
In this second part, we are checking the existence of the previously created cookie from the first part. If the result is true, we evaluate its value and print something on the screen.

#### _Seen methods:_
- `time()`
- `setcookie()`
- `isset()`
- `$_COOKIE[]`
  <br><br>



## [Example 11: PHP Functions](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_11_PHP_Functions.php)
In this exercise, we are applying knowledge about cookies and how they can be used to store information while navigating through different pages.
````php
<?php
    if (!isset($_COOKIE['valor'])) {
      $aleatorio = rand(0, 10);

      // implode convierte una lista/array en un string
      setcookie('valor', implode(';', [$aleatorio, time()]), time() + 20);
    } else {
      # code...
    }
  ?>
````

We check the existence of `$_COOKIE['valor']`. If it's negative, we create one using a random number between 0 and 10 and the current time value in seconds.

The value stored in this cookie represents an array returned by the `implode()` method. This text file will exist for the next 20 seconds from the current time.

#
#### [Example 11.2: PHP Functions](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_11.2_PHP_Functions.php)
In this second part, we extract information from the previously created cookie. We saw that the stored value was a string created from an array, so we have to apply the reverse process to convert that string back into an array.
``````php
<?php
    // explode() hace la función contraria a implode(), crea un array a partir de un string estructurado
    var_dump($_COOKIE['valor']);

    $recuperar = explode(';', $_COOKIE['valor']); // Esto es un array
    $valor = $recuperar[0];
    $cuando = $recuperar[1];
  ?>
``````

``````html
<h1>El valor de la cookie es 
    <span> <?php echo $valor;?> </span> creada el 
    <span> <?php echo date('D, d M Y H:i:s', $cuando)?> </span> 
</h1>
``````

``````php
<?php
    for ($i=0; $i < $valor; $i++) { 
      echo 'Repeticiones </br>';
    }
?>
``````
The explode() method returns an array, so we can access the elements contained inside through a numeric index. After that, the values are completely manipulable, so we can use HTML5 tags to display them on the screen or execute a for() loop.

#### _Seen methods:_
- `!isset()`
- `rand()`
- `setcookie()`
- `implode()`
- `time()`
  <br><br>



## [Example 12: MVC View](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_12_MVC_View.php)
The MVC, or Model-View-Controller, is an architectural pattern widely used in software development. MVC divides the application into three main components:

- Model: which handles logic and data.
- View: which handles the user interface.
- Controller: which handles the interaction between the Model and the View.

This pattern promotes modularity, code reusability, and maintainability, by clearly separating responsibilities, allowing developers to work on specific parts of the application without affecting other parts.

``````php
<?php
    // VIEW
    // Importamos las otras partes del proyecto
    include 'Ex_12.2_MVC_Controller.php';
    include 'Ex_12.3_MVC_Model.php';

    // $compra es un array de 'Ex_12.3_MVC_Model.php'que pasamos como parámetro a 'Ex_12.2_MVC_Controller.php' para que proceda a la ejecución de la función con esos valores.
    enumerarElementos($compra);
  ?>
``````
In this code block, we import functions and data from other files using the include `method()`. By using `enumerarElementos($compra)`, we are calling a Controller function and sending Model data as a parameter. This function will return an HTML5 code block with specific information to the View.

#
#### [Example 12.2: MVC Controller](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_12.2_MVC_Controller.php)
``````php
<?php
    // CONTROLLER
    function enumerarElementos ($listaDeCosas){
      foreach ($listaDeCosas as $cosa){
        echo '<li>'.$cosa.'</li>';
      }
    }
?>
``````
#
#### [Example 12.3: MVC Model](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_12.3_MVC_Model.php)
``````php
<?php
    // MODEL
    $compra = array('Tomates','Patatas','Lechugas','Macarrones');
?>
``````

#### _Seen methods:_
- `function()`
- `foreach()`
- `include()`
- `array()`
  <br><br>



## [Example 13:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_13_Forms.html)
PHP forms allow us to collect and process data entered by users on webpages. Generally, a form is made up of inputs such as text fields, action buttons, checkboxes, and submit buttons, among others. These forms send the information to the server for processing.

The data entered by the user is sent to the server as part of an HTTP request. After that, PHP can access the data using superglobals like $_GET or $_POST according to the sending method defined in the form.
``````html
<body>
  <form action="Ex_13.2_Show_Data.php" method="GET">
    <p>
      Introduce tu nombre <input type="text" name="nombre">
    </p>
    <p>
      Introduce tu apellido <input type="text" name="apellido">
    </p>
    <p>
      <input type="submit">
    </p>
  </form>
</body>
``````
We can insert a form into an HTML5 file using the <form> tag. Two critical attributes are involved: action and method.

- `action="Ex_13.2_Show_Data.php"`: indicates the PHP file that will process the collected data.
- `method="GET"`: indicates how the data will be sent to the PHP file specified in the action attribute.

#
#### [Example 13.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_13.2_Show_Data.php)
``````php
<body>
  <p>
    El nombre introducido es: <?php echo $_GET['nombre']?>, y el apellido es: <?php echo $_GET['apellido']?>
  </p>
  <br>
  <a href="Ex_13_Forms.php">Volver</a>
</body>
``````
As we can see $_GET['nombre'] and $_GET['apellido'] are data received by the `Ex_13.2_Show_Data` file from `Ex_13_Forms.php` using the GET method. 

#### _Seen methods:_
- `$_GET[<value>]`
  <br><br>



## [Example 14:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_14_Form_Submit.html)
This is another example of how PHP, together with HTML5, collects and processes data entered by users in a form. However, in this case, the chosen method is POST.
``````html
<body>
  <form action="Ex_14.2_Show_Data.php" method="POST">
    <label for="producto">Producto</label>
    <input type="text" name="producto"> <br>

    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad"> <br> <br>

    <input type="submit" name="comprar" value="comprar">
  </form>
</body>
``````
#
#### [Example 14.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_14.2_Show_Data.php)
``````php
<?php
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
``````
We check if `$_COOKIE['lista']` is already set. If it is not, the cookie is created; otherwise, the value stored inside is assigned to `$listaCompra`. In any case, the data received by the `POST` method is added to the current value of `$listaCompra`, which could be `null` if the cookie was not set previously.

After that, the cookie called lista is overwritten, storing the accumulated value of `$listaCompra`.

#### _Seen methods:_
- `$_POST[<value>]`
- `var_dump()`
- `echo()`
- `!isset()`
- `$_COOKIE[<value>]`
- `setcookie()`
- `time()`
- `unset($_COOKIE[<value>])`
  <br><br>



## [Example 15:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_15_Form.html)
This HTML5 file is a form whose data will be processed by `Ex_15_Show_Data.php`, sending the data through the POST method.
``````html
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
``````

#
#### [Example 15.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_15.2_Show_Data.php)
``````php
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
``````
In this second part, the data collected from the form is used as a parameter in the functions: `asignarClase()` and `asignarGenero()`. These functions are stored inside another file; however, the `include()` method allows us to call variables and functions from outside the current file.

#
#### [Example 15.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_15.3_Show_Data_Functions.php)
``````php
<?php
  function asignaClase($clase){
    switch ($clase) {
      case 'profesor':
        echo 'Ex_15.2_Show_Data.jpg';
        break;
      case 'alumno':
        echo 'Ex_15.2_Show_Data.jpg';
        break;
      case 'unknown':
        echo 'Ex_15.2_Show_Data.jpg';
        break;
    }
  }

  function asignaGenero($genero){
    switch ($genero) {
      case 'masculino':
        echo 'Ex_15.2_Show_Data.jpg';
        break;
      case 'femenino':
        echo 'Ex_15.2_Show_Data.jpg';
        break;
      case 'neutro':
        echo 'Ex_15.2_Show_Data.jpg';
        break;
    }
  }
?>
``````
The functions `asignarClase()` and `asignarGenero()` will return a string, which represents an address to a `.jpg` file. This address will be the `img` tag's `src` attribute.

#### _Seen methods:_
- `include()`
- `echo()`
- `function()`
- `switch()`
  <br><br>



## [Example 16:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_16_GET_Method_Form.html)
This is a form using the GET method for data sending, which means the data goes through the URL. As we can see, there is a link at the end of the file which forces a GET method, sending predefined data.
``````html
<body>
  <form action="Ex_16.2_Show_Data.php" method="GET">
    <p>Ciudad: <input type="text" name="ciudad"></p>
    <p>Fecha: <input type="date" name="fecha"></p>
    <input type="submit" name="Enviar">
  </form>

  <a href="Ex_16_Show_Data.php?ciudad=Madrid&fecha=Pendiente">Me puedo presentar en Madrid en cualquier fecha que me den</a>
  <!-- Forzamos la URL con un GET -->
</body>
``````

#
#### [Example 16.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_16.2_Show_Data.php)
As it happened in the previous exercise 15, this file shows the data collected by the form, making use of the `include()` method to call functions from `Ex_16.3_Show_Data_Functions.php`. These functions will return a string based on the parameter received.
``````php
<body>
  <?php include 'Ex_16.3_Show_Data_Functions.php'?>
  
  <h1>Recibimos datos del formulario anterior</h1>
  <p>Has elegido hacer el examen en 
    <span><?php echo mostrarCiudad();?></span> el dia
    <span><?php echo mostrarFecha();?></span>
  </p>
  <a href="Ex_16_GET_Method_Form.html">Volver</a>
</body>
``````

#
#### [Example 16.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_16.3_Show_Data_Functions.php)
This file could be seen as the Controller of an MVC design pattern, because it contains all of the functions used in the entire example. These functions receive data and return another following a logic.
``````php
<?php
  function mostrarCiudad(){
    if (isset($_GET['ciudad'])) {

      if (strlen($_GET['ciudad'] > 0)) {
        $ciudad = $_GET['ciudad'];
      }
      else{
        $ciudad = 'NO SE HA DEFINIDO CIUDAD';
      }
    }
    return $ciudad;
  }

  function mostrarFecha(){

    // Comprobaremos si existe el valor
    if (isset($_GET['fecha'])) {

      if (strlen($_GET['fecha']) > 0) {
        // Si tiene el valor 'Pendiente' (hemos pulsado el enlace forzando el envío GET)
        if ($_GET['fecha'] == 'Pendiente') {
          $fechaFormateada = 'Te avisaremos cuando haya una fecha disponible';
        }
        else {
          // Si no, venimos del formulario
          $fecha = $_GET['fecha'];
          $tiempo = strtotime($fecha);
          $fechaFormateada = date('l, d, F Y', $tiempo);
        }
      }
      else {
      // Si no está definida es que hemos accedido directamente a esta página sin pasar por el formulario
      $fechaFormateada = 'NO SE HA ELEGIDO FECHA';
    }
    }
    return $fechaFormateada;
  }
?>
``````

#### _Seen methods:_
- `include()`
- `isset()`
- `strlen()`
- `return`
- `$_GET[<value>]`
  <br><br>



## [Example 17:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17_Database_Connection/Ex_17_MVC_View.php)
Previously, in exercise 12, we saw how the MVC design pattern works. With that in mind, this exercise goes deep inside the MVC by connecting with a database and fetching data from it.

The View file is only the window where the result of the function `printListaCiudades()` will be displayed.
``````html
<body>
  <h1>Conectando a la base de datos de países</h1>
  <?php
    include 'Ex_17.2_MVC_Controller_Show_Data.php';
    pintaListaCiudades();
  ?>
</body>
``````

#
#### [Example 17.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17_Database_Connection/Ex_17.2_MVC_Controller_Show_Data.php)
This file represents the client-side controller. It means that this code builds the HTML structure with the data fetched using the server-side controller and the Model file.

The data comes to this file as the return of the function `getListaCiudades()`;
``````php
<?php
  include 'Ex_17.3_MVC_Model_Data_Handling.php';

  function pintaListaCiudades(){
    $datos = getListaCiudades();
    if (is_string($datos)) {
      echo $datos; 
    }
    else {
      echo "<table>\n
              <tr>\n
                <th>ID</th>\n
                <th>Nombre</th>\n
                <th>Código País</th>\n
                <th>Comunidad</th>\n
                <th>Población</th>\n
              </tr>\n";
      
      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<tr>\n
                <td>" . $fila["ID"] . "</td>\n
                <td>" . $fila["Name"] . "</td>\n
                <td>" . $fila["CountryCode"] . "</td>\n
                <td>" . $fila["District"] . "</td>\n
                <td>" . $fila["Population"] . "</td>\n
              </tr>\n";
      };
      echo "</table>\n";
    };
  }
?>
``````

#
#### [Example 17.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17_Database_Connection/Ex_17.3_MVC_Model_Data_Handling.php)
This file can be interpreted as the server-side controller file or the model file. The point is that the function of this code is fetching data from the database and returning it to the client-side controller to allow the HTML building.
``````php
<?php
  require "Ex_17.4_MVC_Model_Database.php";

  function getListaCiudades(){

    $DB = crearConexion('world');
    $sql = 'SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population ASC';
    $result = mysqli_query($DB, $sql);

    if(mysqli_num_rows($result) > 0){
      return $result;
    }
    else {
      echo 'No hay nada en la lista de ciudades.';
    }
    cerrarConexion($DB);
  }
?>
``````

#
#### [Example 17.4:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17_Database_Connection/Ex_17.4_MVC_Model_Database.php)
To fetch data, it is necessary to establish a connection with a database. So, this file does that; this is its unique function. `crearConexion()` is the method used to specify where the database is hosted and how we access it. This file also contains the `cerrarConexion()` method, which closes all of the connections with the indicated database.
``````php
<?php
  function crearConexion($database){
    $host = "localhost";
    $user = "root";
    $password = "";

    $conexion = mysqli_connect($host, $user, $password, $database);

    var_dump($conexion);

    if (!$conexion) {
      die("<br> Error de conexión con la base de datos: " . mysqli_connect_error());
    }
    else {
      echo "<br> Conexión correcta con la base de datos: " . $database;
    }
      return $conexion;
  }

  function cerrarConexion($conexion){
    mysqli_close($conexion);
  }
?>
``````

#### _Seen methods:_
- `include()`
- `function()`
- `is_string()`
- `echo()`
- `while()`
- `mysqli_query()`
- `mysqli_fetch_assoc()`
- `mysqli_num_rows()`
- `mysqli_connect()`
- `mysqli_connect_error()`
- `mysqli_close()`
- `die()`
  <br><br>



## [Example 17B: Main View](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17B_Database_Connection/Ex_17B_MVC_Main_View.php)

``````html

``````

#
#### [Example 17B: Form View](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17B_Database_Connection/Ex_17B_MVC_Form_View.php)

``````html
``````

#
#### [Example 17B.2: MVC Controller Show Data](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17B_Database_Connection/Ex_17B.2_MVC_Controller_Show_Data.php)

``````html
``````

#
#### [Example 17B.3: MVC Model Data Handling](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17B_Database_Connection/Ex_17B.3_MVC_Model_Data_Handling.php)

``````html
``````

#
#### [Example 17B.4: MVC Model Database](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_17B_Database_Connection/Ex_17B.4_MVC_Model_Database.php)

``````html
``````

#### _Seen methods:_
- `mysqli_fetch_asssoc()`
- `is_string()`
- `while()`
- `include()`
- `!isset()`
- `$_GET[<value>]`
  <br><br>



## [Example 18:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_18_Database_Connection/Ex_18_MVC_View.php)
``````php
<body>
  <h1>Conectando a la base de datos de países</h1>

  <?php
    include 'Ex_18.2_MVC_Controller_Show_Data.php';

    pintaListaCiudadesConIdiomas();
  ?>
</body>
``````

#
#### [Example 18.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_18_Database_Connection/Ex_18.2_MVC_Controller_Show_Data.php)
``````php
<?php
  include 'Ex_18.4_MVC_Model_Data_Handling.php';

  function pintaIdiomas($ciudad){
    $datos = getIdiomasDeUnaCiudad($ciudad);
    $resultado = "<ul> \n";

    while ($idioma = mysqli_fetch_assoc($datos)){
      $resultado .= "<li>" . $idioma["Idioma"] . "</li>\n";
    }
    $resultado .= "</ul>";
    return $resultado;
  }

  function pintaListaCiudadesConIdiomas(){
    $datos = getListaCiudades();

    if (is_string($datos)) {
      echo $datos;
    }
    else {
      echo "<table>\n
              <tr>\n
                <th>Nombre</th>\n
                <th>Código País</th>\n
                <th>Idiomas</th>\n
              </tr>\n";
    
      while ($fila = mysqli_fetch_assoc($datos)) {
        echo "<tr>\n
              <td>" . $fila["Name"] . "</td>\n
              <td>" . $fila["CountryCode"] . "</td>\n
              <td>" . pintaIdiomas($fila["Name"]) . "</td>\n
            </tr>\n";
      };
      echo "</table>";
    }
  }
?>
``````

#
#### [Example 18.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_18_Database_Connection/Ex_18.3_MVC_Model_Data_Handling.php)
``````php
<?php
  require "Ex_18.3_MVC_Model_Database.php";

  function getIdiomasDeUnaCiudad($ciudad){
    // Nos conectamos a la base de datos world
    $DB = crearConexion("world");

    // Definimos la consulta para obtener los datos. Fijate que tenemos que poner las comillas en el WHERE para comprobar la variable.
    $sql = "SELECT countrylanguage.Language as Idioma FROM city INNER JOIN countrylanguage ON city.CountryCode = countrylanguage.CountryCode WHERE city.Name = '" . $ciudad . "'; ";

    // Hacemos la consulta y guardamos el resultado en $result
    $result = mysqli_query($DB, $sql);

    // Cerramos la conexión
    cerrarConexion($DB);

    // Si la consulta ha devuelto algún valor, devolvemos los valores.
    if (mysqli_num_rows($result) > 0) {
      return $result;
      // Si no, enviamos un mensaje de error
    }
    else {
      echo "No hay nada en la lista de ciudades";
    }
  }

  function getListaCiudades(){
    // Nos conectamos a la base de datos world
    $DB = crearConexion("world");

    // Definimos la consulta para obtener todos los datos de la tabla city
    $sql = "SELECT ID, Name, CountryCode FROM city";

    // Hacemos la consulta y guardamos el resultado en $result
    $result = mysqli_query($DB, $sql);

    // Cerramos la conexion
    cerrarConexion($DB);

    // Si la consulta ha devuelto algún valor, devolvemos los valores.
    if (mysqli_num_rows($result) > 0) {
      return $result;
      // Si no, enviamos un mensaje de error.
    }
    else {
      echo "No hay nada en la lista de ciudades";
    }
  }
?>
``````

#
#### [Example 18.4:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_18_Database_Connection/Ex_18.4_MVC_Model_Database.php)
``````php
<?php
  function crearConexion($database){
    $host = "localhost";
    $user = "root";
    $password = "";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
      die("<br> Error de conexión con la base de datos: " . mysqli_connect_error());
    }
    else {
      echo "<br> Conexión correcta con la base de datos: " . $database;
    }
    return $conexion;
  }

  function cerrarConexion($conexion){
    mysqli_close($conexion);
  }
?>
``````

#### _Seen methods:_
- `include()`
- `function()`
- `while()`
- `return`
- `mysqli_fetch_assoc()`
- `mysqli_query()`
- `mysqli_num_rows()`
- `mysqli_connect_error()`
- `die()`
- `mysqli_close()`
  <br><br>



## [Extra 1: Spanish Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Extra_1_Spanish_Date.php)
Every time we ask PHP for a date using the `date()` method, it is displayed in English. So, in order to get a Spanish date, we can apply this technique based on arrays, one for the months and another for the weekdays.
``````php
<?php
  $time = time();
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  $díaSemana = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

  echo 'EJERCICIO 1 - MOSTRAR FECHA EN CASTELLANO <br>';

  # Número de día del año y día de la semana en castellano
  # Para que se muestra el día de la semana en castellano creamos un array de strings con los días de la semana. Luego mediante el método date obtenemos el número del día de la semana (1-7) y le restamos uno porque los elementos del array comienzan desde el 0.
  echo '<b>'.date("z ").$díaSemana[date("N")-1].'</b> <br>';

  # Fecha completa con mes en castellano
  echo '<b>'.$díaSemana[date("w")-1].date(" d ").$meses[date("n")-1].date(" o").'</b> <br>';

  # Horas minutos y segundos con dos dígitos
  echo '<b>'.date("g:i:s").'</b> <br>';

  # Más detalle en https://www.baulphp.com/convertir-fecha-php-en-espanol/
?>
``````
With date('w'), date('d'), and date('n'), we get the weekday numeric representation (0-6), the month day (01-31), and the numeric representation of the month (01-12). The -1 means we require a lower value because the range value returned by date('n') starts from 1, not 0, as the arrays do.
#
#### [Extra 1.2: Spanish Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Extra_1.2_Spanish_Date_SetLocale.php)
This example was another way we used to apply displaying dates in other languages. However, it is no longer useful because the `strftime()` method has been deprecated. This method was used to format a local time or date according to locale settings.

The `setlocale()` method was used together with `strftime()` because the first one sets locale information.

``````php
<?php
  setlocale(LC_TIME,'es_ES.UTF-8', 'esp');
  $formatoFechaHora = "%j: %A, %d de %B de %Y %H:%M%:%S";
  $strf = strftime($formatoFechaHora); # Ya no sirve, está en desuso
  
  # Fecha completa
  echo $strf;

  # No funciona
?>
``````
#### _Seen methods:_

- `time()`
- `date()`
- `setlocale()`
- ~~`strftime()`~~ _- deprecated_
- `echo()`
  <br><br>



## [Extra 2: Insert Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Extra_1.2_Spanish_Date_SetLocale.php)

#### _Seen methods:_

- `time()`
- `date()`
- `getdate()`
- `echo()`
  <br><br>


# INSTALLATION
# prueba

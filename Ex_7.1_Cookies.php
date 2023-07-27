<!--
  LAS COOKIES GUARDAN INFORMACIÓN TEMPORAL DEL USUARIO. A DIFERENCIA DE session_start() DONDE EL INICIO DE SESIÓN SE GUARDA EN EL SERVIDOR, CON setcookie() ESTAMOS GUARDANDO LA CREACIÓN DE LAS COOKIES EN EL CLIENTE

  LAS COOKIES SON PEQUEÑOS ARCHIVOS QUE SE GUARDAN DENTRO DE LOS ARCHIVOS DEL CLIENTE Y NOS INDICAN EL USO QUE ESTAMOS HACIENDO DEL NAVEGADOR O DE LA WEB QUE VISITAMOS.


  setcookie() define una cookie para ser enviada junto con el resto de cabeceras HTTP. Estos son todos los parámetros admitidos por esta función:

  setcookie(
    string $name, -- Nombre de la cookie
    string $value = "", -- El valor se almacena en el ordenador del cliente
    int $expires = 0, -- Tiempo en el que la cookie expira. Lo normal es time() + segundos concretos de duración
    string $path = "", -- La ruta dentro del servidor en la que la cookie estará disponible
    string $domain = "", --
    bool $secure = false, -- Indica si la cookie sólo debe transmitirse por una conexión segura HTTPS desde el cliente
    bool $httponly = false -- Cuando es true la cookie será accesible sólo a través del protocolo HTTP.
): bool

  Si existe algún tipo de output anterior a la llamada de esta función, setcookie() fallará y retornará false. Si setcookie() ejecuta satisfactoriamente, retornará true. Esto no indica si es que el usuario ha aceptado la cookie o no.

  $_COOKIE es un array asociativo de variables pasadas al script actual a través de Cookies HTTP. Esta es una 'superglobal' lo que significa simplemente que es una variable que está disponible en cualquier parte del script.
-->

<?php
  setcookie('Ilerna', 'Hola a todos', time() + 10);
  echo $_COOKIE['Ilerna'];
?>


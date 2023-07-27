<?php
  // REPRESENTA EL CONTROLADOR - LA CAPA DE FUNCIONALIDADES Y PETICIONES DE DATOS
  // Aquí tenemos las funcionalidades

  function enumerarElementos ($listaDeCosas){
    foreach ($listaDeCosas as $cosa){
      echo '<li>'.$cosa.'</li>';
    }
  }
?>
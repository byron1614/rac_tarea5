<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $saludo = "Este es el método GET. Se ha enviado una solicitud GET al servidor.";
    echo $saludo;
    
} else {
  echo "Este no es el método GET. Se ha enviado una solicitud diferente al servidor.";
}
?>

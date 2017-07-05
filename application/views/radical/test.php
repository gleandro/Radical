<?php
$para      = 'giancarlosleandro1@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: giancarlosleandro1@gmail.com' . "\r\n" .
    'Reply-To: giancarlosleandro1@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];


$mensaje = "Este mensaje fue enviado por " . $nombre . ".\r\n";
$mensaje .= "El email del mensajero es: " . $mail . "\r\n";
$mensaje .= "La descripcion del asunto"  . $_POST['mensaje'] . "\r\n";


$para = 'Agu1laredu@hotmail.com';
$asunto = 'Mensaje de mi sitio web';



mail($para, $asunto, utf8_decode($mensaje), $header);

?> 
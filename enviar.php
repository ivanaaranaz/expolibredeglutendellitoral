<?php

$name = $_POST['name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];


$header .= 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

// ver variables origen e industria 

$mensaje .= "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su telefono es: " . $telefono . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$para = 'directvformularios1@gmail.com';
$asunto = 'CLIENTE NUEVO FORMULARIO';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias.html");



?>
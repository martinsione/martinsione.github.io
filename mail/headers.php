<?php
// Headers

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
// Estos dos van siempre si o si
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales

// Para que diga el nombre de quien lo envio y me 
// deje contestarselo directamente a su mail
$headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";
?>
<?php
    // Para darle el formato html al mail
    include 'headers.php';

    $destino    = 'martinsione03@gmail.com';
    $asunto     = 'New website message';

    // Para que tenga un formato, sino es texto plano
    $msgformat  = '<h1>' . $name . '<h1>'. '<hr>' . '<h4>' . $message . '<h4>';

    // Funcion de envio
    $envio      = mail($destino, $asunto, $msgformat, $headers);
?>
<?php
    include 'headers.php';
    $destino    = 'martinsione03@gmail.com';
    $asunto     = 'New website message';
    $msgformat  = '<h1>' . $name . '<h1>'. '<hr>' . '<h4>' . $message . '<h4>';
    $envio      = mail($destino, $asunto, $msgformat, $headers);
?>
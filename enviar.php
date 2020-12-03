<?php
    $name       = $_REQUEST['name'];
    $email      = $_REQUEST['email'];
    $message    = $_REQUEST['message'];

    if ($name == "" or $email == "" or $message == "") {
        echo '';
    } else {
        include 'mail/mail.php';
        include 'sql/database.php';
    };

    // header("Location: http://localhost/prueba#contact");
    header("Location: https://martinsione.000webhostapp.com/prueba/");
    die();
?>
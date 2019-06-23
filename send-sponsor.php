<?php

$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $para      = 'baservicejams@gmail.com';
    $titulo    = 'Contacto para Sponsor';
    $contenido   = htmlspecialchars($mensaje);
    $cabeceras = 'From: baservicejams@gmail.com' . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $contenido, $cabeceras);
}

?>

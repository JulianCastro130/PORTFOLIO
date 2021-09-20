<?php
    $destinatarios = 'cococastro619@gmail.com';

    $nombre = $_POST['NOMBRE'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Alguien que visitó la página te envío esto.";
    $mensajeCompleto = $mensaje . "\nAntentamente: " . $nombre;

    mail($destinatario, $asunto, $mensaje, $telefono, $header);
    echo "<script>alert('coreo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";
?>
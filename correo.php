$ \
<?php
    $destinatario = 'gamesprojomi@gmail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Shared from Artsprojm Website";
    $mensajeCompleto = $mensaje . "\nBy: " . $nombre;

    mail($destinatario, $header, $mensajeCompleto);
    echo "<script>alert('Yoooooo, Email Submitted successfully!')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",0)</script>";
?>
$ \
<?php
    $destinatario = 'gamesprojomi@gmail.com';
    $email = $_POST['fotter-form-email'];
    $number = $_POST['fotter-form-number'];

    $header = "Shared from Artsprojm Website";
    $mensajeCompleto = $number . "\nBy: " . $email;

    mail($destinatario, $header, $mensajeCompleto);
    echo "<script>alert('Email Submitted successfully')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",0)</script>";
?>
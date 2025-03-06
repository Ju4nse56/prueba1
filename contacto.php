<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes hacer algo con los datos, como enviarlos por correo, guardarlos en la base de datos, etc.
    $to = "tuemail@dominio.com"; // Aquí pondrías tu correo electrónico
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Gracias por tu mensaje, $nombre. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}
?>

<?php
$mensajeEnviado = false;
$errorEnvio = false;
$nombre = $email = $mensaje = ""; // Inicializamos las variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        $to = "tucorreo@gmail.com"; // Cambia esto por tu dirección de Gmail
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Intentamos enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            $mensajeEnviado = true;
        } else {
            $errorEnvio = true;
        }
    } else {
        $errorEnvio = true;
    }
}
?>

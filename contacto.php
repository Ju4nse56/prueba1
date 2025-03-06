<?php
$nombre = $email = $mensaje = ""; // Variables para almacenar los datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
}
    } else {
        $errorEnvio = true;
    }
}
?>

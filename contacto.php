class Contacto {
    public $nombre;
    public $email;
    public $mensaje;

    public function __construct($nombre, $email, $mensaje) {
        $this->nombre = htmlspecialchars($nombre);
        $this->email = htmlspecialchars($email);
        $this->mensaje = htmlspecialchars($mensaje);
    }

    public function mostrarMensaje() {
        return "<div class='message-box'>
                    <h2>Datos Enviados:</h2>
                    <p><strong>Nombre:</strong> $this->nombre</p>
                    <p><strong>Email:</strong> $this->email</p>
                    <p><strong>Mensaje:</strong> " . nl2br($this->mensaje) . "</p>
                </div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contacto = new Contacto($_POST['nombre'], $_POST['email'], $_POST['mensaje']);
    echo $contacto->mostrarMensaje();
}


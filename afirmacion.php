<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $telefono = $_POST["subject"];
    $mensaje = $_POST["message"];

    $destinatario = "sistemas@movilnet.pe";

    $asunto = "Consulta de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: $email";

    $enviado = @mail($destinatario, $asunto, $contenido, $headers);

    if ($enviado) {
        echo "<script>alert('El correo se envió correctamente.');</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar. Por favor, inténtelo nuevamente.');</script>";
    }
}
?>

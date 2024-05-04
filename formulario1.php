<?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    $distrito = $_POST["distrito"];
    $provincia = $_POST["provincia"];
    $departamento = $_POST["departamento"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "jhonnatan.marcas@truckmin.pe";
    $asunto = "Nuevo mensaje de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "DNI: $dni\n";
    $contenido .= "Distrito: $distrito\n";  // Aquí corrí el error
    $contenido .= "Provincia: $provincia\n";  // Aquí corrí el error
    $contenido .= "Departamento: $departamento\n";  // Aquí corrí el error
    $contenido .= "Mensaje: $mensaje";

    $header = "From: sistemas@movilnet.pe";

    $mail = @mail($destinatario, $asunto, $contenido, $header);

    if ($mail) {
        echo "<script>alert('El correo se envió correctamente.')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente.')</script>";
    }
}
?>

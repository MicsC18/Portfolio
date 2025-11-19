<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitización básica
    $nombre = trim($_POST['Nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    $errores=true;

    if (empty($nombre)) {
         $errores=false;
         header('Location: ../Vistas/Index.php');
         exit;
    }

    if (empty($email)) {
         $errores=false;
        header('Location: ../Vistas/Index.php');
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores=false;
        header('Location: ../Vistas/Index.php');
        exit;
    }

    if (empty($mensaje)) {
        $errores=false;
         header('Location: ../Vistas/Index.php');
         exit;
    }

    // Si no hay errores, enviar el correo
    if (($errores)) {
        $para = "tuemail@tudominio.com"; // Cambia esto por tu email
        $asunto = "Nuevo mensaje de contacto";
        $contenido = "Nombre: $nombre\nEmail: $email\n\nMensaje:\n$mensaje";

        // Cabeceras seguras
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Enviar correo
        if (mail($para, $asunto, $contenido, $headers)) {
            echo "Mensaje enviado correctamente.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } 
}
?>
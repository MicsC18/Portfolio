<?php
function validarRecaptcha($claveSecreta, $respuestaUsuario)
{
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $claveSecreta,
        'response' => $respuestaUsuario,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    return isset($response['success']) && $response['success'] === true;
}

// Clave secreta de reCAPTCHA
$claveSecreta = 'TU_CLAVE_SECRETA';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha = $_POST['g-recaptcha-response'] ?? '';

    if (empty($recaptcha)) {
        echo "Por favor, completa el CAPTCHA.";
        exit;
    }

    if (!validarRecaptcha($claveSecreta, $recaptcha)) {
        echo "Falló la verificación del CAPTCHA.";
        exit;
    }

     $nombre = trim($_POST['Nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    // Validaciones
    $errores = [];

    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }

    if (empty($email)) {
        $errores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido.";
    }

    if (empty($mensaje)) {
        $errores[] = "El mensaje es obligatorio.";
    }

    // Si no hay errores, enviar el correo
    if (empty($errores)) {
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
    } else {
        // Mostrar errores
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
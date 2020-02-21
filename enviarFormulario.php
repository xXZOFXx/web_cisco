<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'phpmailer.php';

    $mail = new PHPMailer();
    $mail -> CharSet = "UTF-8";

    $mail->From     = ("david.reyes@eclipsemex.mx"); //Dirección desde la que se enviarán los mensajes. Debe ser la misma de los datos de el servidor SMTP.
    $mail->FromName = $nombre;
    $mail->AddAddress("ricardo.zuniga@eclipsemex.mx"); // Dirección a la que llegaran los mensajes.
    //$mail->AddAddress("findes@prodigy.net.mx"); // Dirección a la que llegaran los mensajes.

    // Aquí van los datos que apareceran en el correo que reciba

    $mail->WordWrap = 50;
    $mail->IsHTML(true);
    $mail->Subject  =  "Solicitud de información - Cursos en su Empresa";
    $mail->Body     =  "Una persona realizó contacto por medio de la página Web <a href=\"http://www.findes.org\">www.findes.org</a>, a continuación se mostrarán los detalles ingresados por el visitante:<br><br>".
                        "Nombre: " . $nombre . " <br> ".
                        "Correo: " . $email . " <br>".
                        "Teléfono: " . $telefono . " <br>".
                        "Empresa: " . $empresa . " <br><br>  ".
                        "Curso: <br>" . $consulta . " <br><br>".
                       // "<strong>Detalles del curso</strong> " . $nombrecurso . " <br><br>".
                       // "<strong>URL del curso</strong> http://findes.org" . $urlcurso . " <br><br>".
                       // "<strong>Día</strong> " . $iniciocurso . " <br><br>".
                       // "<strong>Inicio</strong> " . $fincurso . " <br><br>".
                        "¡Buena Suerte!";

    // Datos del servidor SMTP

    $mail->IsSMTP();
    $mail->Host = "mail.findes.org:2525";  // Servidor de Salida.
    $mail->SMTPAuth = true;
    $mail->Username = "web@findes.org";  // Correo Electrónico
    $mail->Password = "Informes81*"; // Contraseña

    if ($mail->Send()){
        echo "<script>alert('Formulario Enviado'); window.location.href = '/cursos-in-company/';</script>";
    }
    else{
        echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
    }
?>

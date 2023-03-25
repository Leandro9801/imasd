<?php

$destino = "oficialggb@gmail.com";
$asunto = "Contacto desde el sitio web";
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$contenido = "
	<b color:#0F9D58; font-size:1.2rem>Nombre :</b color:#0F9D58; font-size:1.2rem> " . $name . "<br><b color:#0F9D58; font-size:1.2rem>Email :</b> " . $email . "<br><b color:#0F9D58; font-size:1.2rem>Telefono :</b> " . $subject . "<br><b color:#0F9D58; font-size:1.2rem>Mensaje:</b> " . $message;
// PARA QUE RECONOZCA LAS ETIQUETAS HTML

$encabezados  = "MIME-Version: 1.0" . "\r\n";
$encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// FUNCION MAIL Y REDIRECCIONAMIENTO
mail($destino, $asunto, $contenido, $encabezados);
header("Location: ../Views/gracias.php");

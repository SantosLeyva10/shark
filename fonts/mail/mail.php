<?php


//$para      = 'contacto@sharkdesarrollos.com';
$para      = 'contacto@sharkdesarrollos.com';
$titulo    = 'Haz recibido un correo proveniente de Shark Desarrollos';
$mensaje   = 'Nombre: ' . $_POST['nombre'] . "\r\n" .
				'Correo: ' . $_POST['email'] . "\r\n" .
				'Telefono: ' . $_POST['telefono'] . "\r\n" .
				'mensaje: ' . $_POST['mensaje'] . "\r\n";

$cabeceras = 'From: contacto@sharkdesarrollos.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);



?>
<script language="javascript">
alert("Tu mensaje ha sido enviado correctamente a Shark Desarrollos, en breve nos comunicaremos con usted para resolver sus dudas y brindarle una mejor atención. Gracias...!!!");
window.location="../index.html";
</script>
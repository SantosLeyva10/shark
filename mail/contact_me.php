<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	echo "No contiene argumentos!";
	return false;
}
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message

$to = 'contacto@sharkdesarrollos.com'.', ';
$to .= 'sharkdesarrollos@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Haz recibido un correo de tu sitio web Shark Desarrollos de:  $name";
$email_body = "Buen día, el usuario $name desea comunicarse contigo desde tu sitio web .\n\n"."Aquí los detalles:\n\nNombre: $name\n\nCorreo electrónico: $email_address\n\nTeléfono: $phone\n\nMensaje:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
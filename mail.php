<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Nombre: $name\nMensaje: $message";
$recipient = "arq-juancarlos@hotmail.com";
$subject = "Contacto web";
$mailheader = "From: $email\r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header( 'Location: index.html#contact');
?>
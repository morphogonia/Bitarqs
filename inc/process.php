<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$to = 'info@bitarqs.com';
$subject = 'Mensaje desde la sección de contacto bitarqs.com';

$headers = "From: info@bitarqs.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$message = '<html><body>';
$message .= '<table>';
$message .= '<tr><td><strong>Nombre:</strong></td><td>';
$message .= $nombre;
$message .= '</td></tr><tr><td><strong>E-mail:</strong></td><td>';
$message .= $email;
$message .= '</td></tr><tr><td><strong>Comentarios:</strong></td><td>';
$message .= $comments;
$message .= '</td></tr></table><br/>';
$message .= '<strong>www.bitarqs.com</strong>';
$message .= '</td></tr></table></body></html>';

mail($to, $subject, $message, $headers) or die ('No se puedo enviar el correo');

?>
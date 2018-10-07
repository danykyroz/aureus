<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'mailing/php-mailer/vendor/autoload.php';
//Llamamos la plantilla
ob_start();
include 'mailing/datos_contacto.php';
$template = ob_get_clean();

$mail->isSMTP();                                   

$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;                             
$mail->Username = 'infoaureusrlg@gmail.com';               
$mail->Password = 'sistemas1305';                        
$mail->SMTPSecure = 'ssl';                          
$mail->Port = 465;                                   

//Recipients
$mail->setFrom('infoaureusrlg@gmail.com', 'Info Aureusrlg');
$mail->addAddress( $_POST["correo"], $_POST["nombres"]);     // Add a recipient
//$mail->addAddress("danykyroz@gmail.com", "Daniel Quiroz");
$mail->addBCC('admin@aureusrlg.com');

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Nuevo contacto Aureusrlg.com;"
$mail->Body    = $template;
//$mail->send();



?>
<?php 
@session_start();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'php-mailer/vendor/autoload.php';

ob_start();
include 'datos_contacto.php';
$template = ob_get_clean();
//require("php-mailer/class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com'; 
$mail->Username = 'infoaureusrlg@gmail.com';               
$mail->Password = 'sistemas1305';                        
$mail->SMTPSecure = 'ssl';                          
$mail->Port = 465;                                   

//Recipients
$mail->From='infoaureusrlg@gmail.com';
$mail->FromName='Info Aureusrlg';
$mail->addAddress($_POST["correo"],$_POST["nombres"]);     // Add a recipient
//$mail->addAddress("danykyroz@gmail.com", "Daniel Quiroz");
$mail->addBCC('admin@aureusrlg.com');

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Nuevo contacto Aureus";
$mail->Body    = $template;
$enviado=$mail->send();

if($enviado){
	header ("location:../contacto.php?mensaje_ok=ok");
}
else{
		header ("location:../contacto.php?mensaje_bad=mal");

}
?>
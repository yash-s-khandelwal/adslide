<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //this line is used for detailed output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'adslide7@gmail.com';                     //SMTP username(Sender Mail)
    $mail->Password   = '';                               //SMTP password(App password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('adslide7@gmail.com', 'Adslide.in'); // Sender Mail
    $mail->addAddress("$email", "$name");     //Reciever Mail
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Thank You For Contacting Adslide!";
    $mail->Body    = "
    <h3>Hi $name!</h3>
    <p>
    Thank you for contacting us. We will contact you soon.<br>
    For any business queries reach out to us at adslide7@gmail.in specifying your needs.
    </p>
    <p>
    <b>Your Details</b> <br>
    Name: $name <br>
    Email: $email <br>
    Phone No.: $phone <br>
    Message: $msg
    </p>

    ";

    $mail->send();
    // echo 'Message has been sent';
    header('Location: index.php?success=true');
    exit;
} 
catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('Location: index.php?error=true');
    exit;
}
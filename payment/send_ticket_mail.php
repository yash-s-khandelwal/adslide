<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'adslide7@gmail.com';                     //SMTP username(Sender Mail)
    $mail->Password   = '';                               //SMTP password(App password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Attachments
    $mail->addAttachment('../assets/bgimage1.jpg', "Fresher's Party Pass");    //attachement and name

    //Recipients
    $mail->setFrom('adslide7@gmail.com', 'Adslide.in'); // Sender Mail
    $mail->addAddress("devendrasingh7465@gmail.com", "Devendra Singh");     //Reciever Mail
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Fresher's 2024 Pass";
    $mail->Body    = '
    <h3>Hi Yash!</h3>
    <p>This Mail is sent using a free SMTP Server and my name is devendra your friend. after reading this mail you must be wondering how i did this so call me.</p>';

    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
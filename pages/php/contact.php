<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require_once 'C:\xampp\htdocs\projet_web\vendor\autoload.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $gender = $_POST['gender'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // PHPMailer initialization
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'dev.local1212@gmail.com';
        $mail->Password = 'xrjl wvpq xdoy xeuo';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';

        // Sender and recipient settings
        $mail->setFrom('dev.local1212@gmail.com', 'Dev Local');
        $mail->addAddress('dev.local1212@gmail.com', 'Dev Local');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Formulaire reçus';
        $mail->Body = "Gender: $gender<br>First Name: $firstName<br>Last Name: $lastName<br>Email: $email<br>Comment: $comment";

        if (!$mail->send()) {
            echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }

        $mail->smtpClose();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
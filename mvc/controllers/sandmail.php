<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require_once('mvc/core/PHPMailer-master/src/PHPMailer.php');
    require_once('mvc/core/PHPMailer-master/src/Exception.php');
    require_once('mvc/core/PHPMailer-master/src/SMTP.php');

    $mail = new PHPMailer(true);

    //Load Composer's autoloader
    //require 'vendor/autoload.php';

    $to = "bengemingg@gmail.com";
    $from = trim($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $secondSurname = htmlspecialchars($_POST['second_surname']);
    $phone = htmlspecialchars($_POST['phone']);
    $age = htmlspecialchars($_POST['age']);
    $text = htmlspecialchars($_POST['text']);



    $message = 'Імя: ' . $name . "\r\nФамілія: " . $surname . "\r\nПо-батькові: " . $secondSurname . "\r\nТелефон: " . $phone . "\r\nВік: " . $age . "\r\nВміст повідомлення: " . $text;

    $headers = "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'studprojectpi201@gmail.com';                     //SMTP username
        $mail->Password   = 'bvmfekfkeyrwwzgi';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('studprojectpi201@gmail.com');
        $mail->addAddress('studprojectpi201@gmail.com');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Message from civhelp';
        $mail->Body    = $message;
        $mail->AltBody = $message;
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // При успішному відправленні перенаправити на сторінку з повідомленням про успішну відправку
    header('Location: index.php');

?>
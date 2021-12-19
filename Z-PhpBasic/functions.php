<?php

// --------------------------------------- Connect To DataBase
function connect()
{
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //persian
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // warning
    ];
    return $connect = new PDO('mysql:host=localhost;dbname=mvcdigikala', 'root', '', $options);
}

// --------------------------------------- Login
function login($email, $password)
{
    $sql = "SELECT * FROM `users` WHERE `email`=? AND `password`=? ";
    $result = connect()->prepare($sql);
    $result->bindValue(1, $email);
    $result->bindValue(2, $password);
    $result->execute();

    if ($result->rowCount() >= 1) {
        return true;
    } else {
        return false;
    }
}


// --------------------------------------- CheckEmailExist

function checkEmailExist($email)
{
    $sql = "SELECT `email` FROM `users` WHERE email=?";
    $result = connect()->prepare($sql);
    $result->bindValue(1, $email);
    $result->execute();

    if ($result->rowCount() >= 1) {
        return $result->fetch(PDO::FETCH_ASSOC);

    } else {
        return false;
    }
}

// --------------------------------------- Update Token For Email

function update_token_for_email($token, $email)
{
    $sql = "UPDATE `users` SET `token` =? WHERE `email`=? ";
    $result = connect()->prepare($sql);
    $result->bindValue(1, $token);
    $result->bindValue(2, $email);
    $result->execute();
}

// --------------------------------------- Check Token

function check_token($token)
{
    $sql = "SELECT * FROM `users` WHERE `token`=?";
    $result = connect()->prepare($sql);
    $result->bindValue(1, $token);
    $result->execute();

    if ($result->rowCount() >= 1) {  // >=
        return true;

    } else {
        return false;
    }
}


// --------------------------------------- Change Password  تغییر پسوورد اگر یکی بود با توکنی که ارسال شد بیا تغییر بده

function change_password($password, $token)
{
    $sql = "UPDATE `users` SET `password`=? WHERE `token`=?";
    $result = connect()->prepare($sql);
    $result->bindValue(1, $password);
    $result->bindValue(2, $token);
    $result->execute();
}


// --------------------------------------- Email


/*

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "name@gmail.com";                // gmail Me
$mail->Password = "super_secret_password";        // password gmail Me
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "name@gmail.com";
$mail->FromName = "Full Name";

$mail->addAddress("name@example.com", "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

*/




















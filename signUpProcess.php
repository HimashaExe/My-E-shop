<?php

include "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$fname = $_POST["f"];
$lname = $_POST["l"];
$email2 = $_POST["e2"];
$mobile = $_POST["m"];
$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];

if ($pw1 != $pw2) {
    echo ("New Password and the Retype password must Equal.");
} else {

    $user_rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email2 . "'");
    $user_num = $user_rs->num_rows;

    if ($user_num == 0) {

        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        $status = 1;

        $charaters = "0123456789";
        $code = '';

        for ($i = 0; $i < 4; $i++) {
            $code .= $charaters[rand(0, strlen($charaters) - 1)];
        }

        Database::iud("INSERT INTO `user`(`fname`,`lname`,`email`,`password`,`joined_date`,`vcode`,`mobile`,`gender_gender_id`,`status_status_id`)
         VALUES ('" . $fname . "','" . $lname . "','" . $email2 . "','" . $pw1 . "','" . $date . "','" . $code . "','" . $mobile . "', '1', '1')");

        // echo ("sucsess");
        //email code

        $mail = new PHPMailer;

        $mail->isSMTP();
        
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'himashashehan0813@gmail.com';
        $mail->Password = 'kqxa klxr egdk mfzy'; //app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('himashashehan0813@gmail.com', 'eStore');
        $mail->addReplyTo(false);
        $mail->addAddress($email2);
        $mail->isHTML(true);
        $mail->Subject = 'My Library Email Verification';
        $bodyContent = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Format</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-width: 1px solid #ddd;
            text-align: center;
            border-radius: 8px;
        }

        .img-thumbnail {
            width: 100%;
            max-width: 150px;
            border: 1px;
            border-radius: 40px;

        }

        .btn{
            display: inline-block;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            width: 300px;
            font-weight: bold;

        }

        .btn:hover{
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">

        <h4>E-Library ferification</h4>

        <img src="resources/logo.jpg" alt="E-library logo" class="img-thumbnail">

        <p>
            <b>Hello ' . $fname . ' ,</b><br><br>
            Thanks for join with us!<br />
            We need little more information to complrte your registetion,
            including a confiremation of your email.<br>
            click below button to verify your email.<br><br>
            <a href="http://localhost/My-Library/verification.php?e=' . $email2 . '&v=' . $code . '" class="btn">Verify</a><br><br>
            if you have problem with your verifycation, plese click on the url below
            adnenter the vrification code we ther we genarated for you. <br><br>
            <b>Your verification code is : ' . $code . '</b>
            <a href="http://localhost/My-Library/verification.php">Click Here</a>

        </p>

    </div>
</body>

</html>';

        $mail->Body = $bodyContent;

        if (!$mail->send()) {

            echo ("Sorry '" . $email2 . "', email sending process failed.");
        } else

            echo ("sucsess");
    } else {
        echo ("User with the same email address already exists.");
    }
}

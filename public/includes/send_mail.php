<?php
require 'PHPMailer/PHPMailerAutoload.php';

function sendMail($name,$email,$number,$message)
{
    //Tell PHPMailer to use SMTP
    $mail = new PHPMailer();
    // $mail->isSMTP();
    echo "<pre>";
    try{
        $mail->isSMTP();
        $mail->Debugoutput = 'html';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        // $mail->Username = "tilvavasu111@gmail.com";
        // $mail->Password = "Vasu123456789";
        $mail->Username = "tilvavasu111@gmail.com";
        $mail->Password = "Vasu123456789";
        $mail->setFrom('tilvavasu111@gmail.com', 'Mailer');//this email for send
        $mail->addAddress('tilvavasu111@gmail.com', 'Vasu Tilva');//this email for send
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact Details';
    
    
        $body = "<h1 style='font-family:sans-serif;'>Contact Detail's</h1>\n"
            ."<table CELLSPACING=0 CELLPADDING=16 style='border:0px solid #eee; background:#fefefe; font-family:sans-serif; text-align:left;'>"
            ."<tr>"
            ."<th style='border:1px solid #eee; background:#fefefe; border-right:0px;'>Name</th>"
            ."<td style='border:1px solid #eee; background:#fefefe; border-bottom:0px;'>$name</td>"
            ."</tr>"
            ."<tr>"
            ."<th style='border:1px solid #eee; background:#fefefe; border-right:0px;' >Email</th>"
            ."<td style='border:1px solid #eee; background:#fefefe; border-bottom:0px;' >$email</td>"
            ."</tr>"
            ."<tr>"
            ."<th style='border:1px solid #eee; background:#fefefe; border-right:0px;'>Number</th>"
            ."<td style='border:1px solid #eee; background:#fefefe; border-bottom:0px;'>$number</td>"
            ."</tr>"
            ."<tr>"
            ."<th style='border:1px solid #eee; background:#fefefe; border-right:0px;'>Message</th>"
            ."<td style='border:1px solid #eee; background:#fefefe;'>$message</td>"
            ."</tr>"
            ."</table>";
        // echo "$body";
    
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
    catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }    
}
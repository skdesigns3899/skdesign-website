<?php
include "../function/function.php";

if (isset($_POST['contact_us_submit'])) {
    

    $email = $_POST['email'];
    $name = $_POST['full-name'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    
    require('send_mail.php');
    sendMail($name,$email,$number,$message);

    $result = contact_us_insert($name,$email,$number,$message);
    header("location:../contact-us.php");
}

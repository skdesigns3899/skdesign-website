<?php
include_once '../function/function.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = login($email, $password);
    if ($result) {
        header("location:../index.php");
    } else {
        header("location:../login.php");
    }
}

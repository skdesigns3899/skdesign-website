<?php
include 'function/function.php';
$con = connect();
close_connection($con);
session_destroy();
header("location:login.php");

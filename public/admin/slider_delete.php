<?php

if (isset($_GET['id'])) {
    include 'function/function.php';
    sliderDelete($_GET['id']);
} else {
    header("location:index.php");
}
header("location:index.php");

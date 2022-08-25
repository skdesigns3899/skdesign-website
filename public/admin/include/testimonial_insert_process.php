<?php
include "../function/function.php";

if (isset($_POST['testimonial_insert'])) {
    $description = $_POST['description'];
    $name = $_POST['name'];
    testimonialInsert($description,$name);
    header("location: ../testimonial.php");
}
header("location: ../testimonial.php");



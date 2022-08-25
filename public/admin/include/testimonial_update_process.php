<?php
include "../function/function.php";

if (isset($_POST['testimonial_update'])) {
    $id = $_POST['id'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    testimonialUpdate($id,$description,$name);
    header("location: ../testimonial.php");
}

<?php
include "../function/function.php";

// $con = connect();
// close_connection($con);

if (isset($_POST['slider_insert'])) {
    // print_r($_POST);
    // print_r($_FILES);
    // $_post
    $image_alter_text = $_POST['image-alter-text'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    // $_FILES
    $name = $_FILES['slider-image']['name'];
    $type = $_FILES['slider-image']['type'];
    $tmp = $_FILES['slider-image']['tmp_name'];
    $error = $_FILES['slider-image']['error'];
    $size = $_FILES['slider-image']['size'];
    $erro = "";
    $path = "";
    $file_ext = explode('.', $name);
    $file_actual_ext = strtolower(end($file_ext));
    $allowed = array("jpeg", "jpg", "png", "gif");
    if (in_array($file_actual_ext, $allowed)) {
        if ($error === 0) {
            if ($size < 5000000) {
                $file_new_name = uniqid('', true) . "." . $file_actual_ext;
                $file_destination = '../../img/slider/' . $file_new_name;
                move_uploaded_file($tmp, $file_destination);
                $error = "Upload SuccessFully";
                $path = $_SERVER['HTTP_ORIGIN'] . '/version2/public/img/slider/' . $file_new_name;
            } else {
                $error = "File Size is to big to upload";
            }
        } else {
            $error = "There was error in uploading, Please Try Again later";
        }
    } else {
        $error = "You Cannot Upload this type of file";
    }
    // echo $error . " <br>" . $path;
    $result = sliderInsert($image_alter_text, $heading, $description, $path);
    // echo $result;
    header("location:../slider_add.php");
}
header("location:../slider_add.php");

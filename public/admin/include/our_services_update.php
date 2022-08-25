<?php
include "../function/function.php";

if (isset($_POST['services_update'])) {
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // $_post
    // die();
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $short_description = $_POST['short_description'];
    $long_description = $_POST['long_description'];
    if($_FILES['slider-image']['error'] == 4){
        $path = $_POST['alrreadypath'];
    } else{
        $name = $_FILES['slider-image']['name'];
        $type = $_FILES['slider-image']['type'];
        $tmp = $_FILES['slider-image']['tmp_name'];
        $error = $_FILES['slider-image']['error'];
        $size = $_FILES['slider-image']['size'];
        $erro = "";
        $path = "";
        $file_ext = explode('.', $name);
        $file_actual_ext = strtolower(end($file_ext));
        $allowed = array("png");
        if (in_array($file_actual_ext, $allowed)) {
            if ($error === 0) {
                if ($size < 5000000) {
                    $file_new_name = $id . "." . $file_actual_ext;
                    $file_destination = '../../img/' . $file_new_name;
                    move_uploaded_file($tmp, $file_destination);
                    $error = "Upload SuccessFully";
                    $path = $_SERVER['HTTP_ORIGIN'] . '/version2/public/img/' . $file_new_name;
                } else {
                    $error = "File Size is to big to upload";
                }
            } else {
                $error = "There was error in uploading, Please Try Again later";
            }
        } else {
            $error = "You Cannot Upload this type of file";
        }
    }
    $result = ourServicesUpdate($id, $heading,$short_description,$long_description,$path);
    // var_dump($result);
    // die();
    header("location:../our_services.php");
}else{
    header("location:../our_services.php");
}

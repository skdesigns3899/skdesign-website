<?php
include 'connection.php';

function slider()
{
    $con = connect();
    $query = "select * from slider";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $row_count = $stmt->rowCount();
    if ($row_count > 0) {
        $result = $stmt->fetchAll();
        return $result;
    }
    return false;
    close_connection($con);
}

function testimonial()
{
    $con = connect();
    $query = "select * from testimonial";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $row_count = $stmt->rowCount();
    if ($row_count > 0) {
        $result = $stmt->fetchAll();
        return $result;
    }
    return false;
    close_connection($con);
}

function ourServices($id)
{
    $con = connect();
    if (!($id > 0)) {
        $query = "select * from our_services";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $row_count = $stmt->rowCount();
        if ($row_count > 0) {
            $result = $stmt->fetchAll();
            return $result;
        }
        return false;
    } else {
        $query = "select * from our_services where id = ?";
        $stmt = $con->prepare($query);
        $stmt->execute([$id]);
        $row_count = $stmt->rowCount();
        if ($row_count > 0) {
            $result = $stmt->fetch();
            return $result;
        }
        return false;
    }
    close_connection($con);
}


function contact_us_insert($name,$email,$number,$message)
{
    $con = connect();
    try
    {
        $query = "INSERT INTO contact_us(name,email,number,message) values(?,?,?,?)";
        $stmt = $con->prepare($query);
        if ( $stmt->execute([$name, $email, $number, $message])) echo "work";
        else echo "not ";
        return true;
    } catch (Exception $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
    close_connection($con);
}


<?php
include 'connection.php';

function login($email, $password)
{
    // $email = "admin@admin.com";
    // $password = "admin";
    $con = connect();
    $query = "select * from user  where email=? AND password=? ";
    $stmt = $con->prepare($query);
    // $stmt->bindParam($email,$password);
    $stmt->execute([$email, $password]);
    $row_count = $stmt->rowCount();
    if ($row_count > 0) {
        $result = $stmt->fetch();
        session_start();
        $_SESSION['id'] = $result->id;
        return true;
    }
    return false;
    close_connection($con);
}

/**
 * Slider
 */

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

function sliderOne($id)
{
    $con = connect();
    $query = "select * from slider where id=?";
    $stmt = $con->prepare($query);
    $stmt->execute([$id]);
    $row_count = $stmt->rowCount();
    if ($row_count > 0) {
        $result = $stmt->fetch();
        return $result;
    }
    return false;
    close_connection($con);
}

function sliderUpdate($id, $image_alter_text, $heading, $description, $path)
{

    $con = connect();
    try
    {
        $query = "UPDATE slider SET path=?, heading=?, description=?, image_alter_text=? WHERE id = ?";
        $stmt = $con->prepare($query);
        $stmt->execute([$path, $heading, $description, $image_alter_text, $id]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }

    close_connection($con);
}

function sliderInsert($image_alter_text, $heading, $description, $path)
{
    $con = connect();
    try
    {
        $query = "insert into slider values(null,?,?,?,?)";
        $stmt = $con->prepare($query);
        $stmt->execute([$path, $heading, $description, $image_alter_text]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
    close_connection($con);
}

function sliderDelete($id)
{
    $con = connect();
    try
    {
        $query = "DELETE FROM `slider` WHERE id = ? ";
        $stmt = $con->prepare($query);
        $stmt->execute([$id]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
    close_connection($con);
}


/**
 * Testimonial
*/

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
function testimonialOne($id)
{
    $con = connect();
    $query = "select * from testimonial where id=?";
    $stmt = $con->prepare($query);
    $stmt->execute([$id]);
    $row_count = $stmt->rowCount();
    if ($row_count > 0) {
        $result = $stmt->fetch();
        return $result;
    }
    return false;
    close_connection($con);
}

function testimonialDelete($id)
{
    $con = connect();
    try
    {
        $query = "DELETE FROM `testimonial` WHERE id = ? ";
        $stmt = $con->prepare($query);
        $stmt->execute([$id]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
    close_connection($con);
}

function testimonialInsert($description, $name)
{
    $con = connect();
    try
    {
        $query = "insert into testimonial values(null,?,?)";
        $stmt = $con->prepare($query);
        $stmt->execute([$description, $name]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
    close_connection($con);
}

function testimonialUpdate($id, $description, $name)
{
    $con = connect();
    try
    {
        $query = "UPDATE testimonial SET description=?, name=? WHERE id = ?";
        $stmt = $con->prepare($query);
        $stmt->execute([$description, $name, $id]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }

    close_connection($con);
}


/**
 * Our Services
*/
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

function ourServicesUpdate($id, $heading, $short_description, $long_description,$path)
{
    $con = connect();
    try
    {
        $query = "UPDATE our_services SET  heading=?, short_description=?, long_description=?, image_path=? WHERE id = ?";
        $stmt = $con->prepare($query);
        $stmt->execute([$heading, $short_description, $long_description,$path, $id]);
        return true;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
    close_connection($con);
}


function contact_us()
{
    $con = connect();
    $query = "select * from contact_us";
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

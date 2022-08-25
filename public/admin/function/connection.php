<?php
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'vns');
// Establish database connection.

function connect()
{
    try
    {
        $temp = (new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS));
        $temp->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $temp;
    } catch (PDOException $e) {
        $error = exit("Error: " . $e->getMessage());
        return ($error);
    }
}

function close_connection(...$con)
{
    foreach ($con as $n) {
        $n = null;
        echo "closeing the connection $n";
    }

}

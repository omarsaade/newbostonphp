<?php


$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

class ServerException extends Exception
{
}
class DatabaseException extends Exception
{
}

try {
    if (!mysqli_connect($mysql_host, $mysql_user, $mysql_pass)) {
        throw new ServerException('Could not connect to server.');
    } else if (!mysqli_select_db($conn, $mysql_db)) {
        throw new DatabaseException('Could not select database');
    } else {
        echo "connected";
    }
} catch (ServerException $ex) {
    echo 'Error: ' . $ex->getMessage();
} catch (DatabaseException $ex) {
    echo 'Error: ' . $ex->getMessage();
}

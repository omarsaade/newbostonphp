<?php


$mysql_host = 'localhost';
$mysql_user = 'roost';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

class ServerException extends Exception
{
    public function showSpecific() {
        return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
    }
}
class DatabaseException extends Exception
{
    public function showSpecific() {
        return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
    }
}


try {
    if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass)) {
        throw new ServerException();// ??? new
    } else if (!mysqli_select_db($conn, $mysql_db)) {
        throw new DatabaseException();
    } else {
        echo "connected";
    }
} catch (ServerException $ex) {
    echo $ex->showSpecific();
} catch (DatabaseException $ex) {
    echo $ex->showSpecific();
}

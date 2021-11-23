<?php


$conn_error = 'could not connect';
$mysql_host = 'localhost'; 
$mysql_user = 'root';
$mysql_pass = '';



$mysql_db = 'a_database';
$mysql_db_connection = '';



if (!($mysql_db_connection = mysqli_connect($mysql_host, $mysql_user , $mysql_pass)) || !mysqli_select_db($mysql_db_connection, $mysql_db) ) {
    die($conn_error);
} else {
    echo 'connected';
}



?>
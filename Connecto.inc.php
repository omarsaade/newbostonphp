<?php



$conn_error = "could not connect";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn = @mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass)||!mysqli_select_db($conn , "a_database")){
   
    die($conn_error);

} 

?>
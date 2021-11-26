<?php
$conn_error = "could not connect";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);


if (isset($_GET['search_text'])) {
     $search_text = $_GET['search_text'];
}
if (!empty($search_text)) {

    if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !mysqli_select_db($conn, "a_database")) {
        die($conn_error);
    } else {
        $query = "SELECT `name` FROM `names` WHERE `name` LIKE '" . mysqli_real_escape_string($conn, $search_text) . "%'";
        $query_run = mysqli_query($conn, $query);
        while ($query_row = mysqli_fetch_assoc($query_run)) {
            echo  $name = '<a href = "anotherpage.php?search_text='.$query_row['name'].'">'.$query_row['name'].'</a><br>';

            //                  }
            //             } else {
            //            echo 'NO results found.';
            //          }

            }



        }
    }

<?php

// function mysqli_result($res,$row=0,$col=0){ 
//     $numrows = mysqli_num_rows($res); 
//     if ($numrows && $row <= ($numrows-1) && $row >=0){
//         mysqli_data_seek($res,$row);
//         $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
//         if (isset($resrow[$col])){
//             return $resrow[$col];
//         }
//     }
//     return false;
// }


header("Content-type: image/jpeg");

$conn_error = "could not connect";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !mysqli_select_db($conn, "a_database")) {

    die($conn_error);
}



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $sql_query = "SELECT * FROM `users` WHERE `id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $sql_query = "SELECT `email` FROM `users` WHERE `id`='" . mysqli_real_escape_string($conn, $id) . "'";
    // echo $sql_query;
    $query = mysqli_query($conn, $sql_query);


    if (mysqli_num_rows($query) >= 1) {
        // $email = mysqli_fetch_assoc($query)['email'];
        $result = mysqli_fetch_assoc($query);
        // $email = mysqli_result($query, 0, 'email');
        $email = $result['email'];
    } else {
        $email = 'ID not found.';
    }
} else {
    $email =  'No Id specified';
}

//print_r($email);
$email_length = strlen($email);
$font_size = 4;
$image_height = imagefontheight($font_size);
$image_width = imagefontwidth($font_size) * $email_length;

$image = imagecreate($image_width, $image_height);


imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);


<?php
require 'connec.inc.php';
if (isset($_POST['text'])) {
    $text = $_POST['text'];
if (!empty($text)) {
    $query = "INSERT INTO `data` VALUES ('','".mysqli_real_escape_string($conn,$text)."')";
    if ($query_run = mysqli_query($conn,$query)) {
        echo 'data inserted.';
    }else {
        echo 'failed';
    }
} else {
    echo 'please type something';
}





}

?>
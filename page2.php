<?php


// echo 'hello' . $_SESSION['username'],' how are you ?';
// echo 'ur favorite food is'. $_SESSION['favfood'];
// echo '<a href="page3.php"> room number 3.<br>' ;

// print_r($_SESSION);
// if (isset($_POST['name'])) {
//    $name = $_POST['name'];
//    if (!empty($name)) {
//        $handle = fopen("names.txt",'a');
//        fwrite($handle , $name."\n");
//        fclose($handle);
    
//    } else {
//        echo 'please';
//    }
// }


// $directory = 'files';
// if ($handle = opendir($directory.'/')) {
//     echo 'looking inside\''.$directory.'\'<br>';
// }


// $filename = 'names.txt';
// $handle = fopen($filename, 'r');
// $datain = fread($handle , filesize($filename));
// $names_array = explode(',', $datain);
// echo $names_array[0];
//explode bi 7awl string la array
//implode bi 7awl array la string
//foreach($names_array as $name) {
//     echo $name.'<br>';
// }













































?>

 <form action="upload.php" method="post" enctype="multipart/form-data" >
   
    <input type="file" name="file" >
    <input type="submit" value="submit">
</form> 
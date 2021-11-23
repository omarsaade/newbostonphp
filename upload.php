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



// $name = $_FILES['file']['name'];
// // $size = $_FILES['file']['size'];
// // $type = $_FILES['file']['type'];

// $tmp_name = $_FILES['file']['tmp_name'];


// if (isset($name)) {
//     if(!empty($name)) {


//         $location = 'uploads/';
//         if (move_uploaded_file($tmp_name, $location.$name)) {
// echo 'uploaded!';
//         } else {
//             echo 'there was an error.';
//         }
//         } else {
//             echo 'please choose a file';
//         }
//     }


















// $filename = 'file.txt';

// if (file_exists($filename)) {
//     echo ' file already exists';
// } else {
//     $handle = fopen($filename , 'w');
//     fwrite($handle , 'Nothing');
//     fclose($handle);
// }

// $filename = 'names.txt';
// if (@unlink($filename)) {
//     echo 'File <strong>' .$filename.'</strong> has been deleted.';
// } else {

// echo 'file cannot be deleted.';
// }




// $filename = 'file.txt';
// $rand = rand(10000,99999);

// if (@rename($filename , $rand.'.txt')) {
//     echo ' file <strong>' .$filename.'</strong> has benn renamed to <strong>'.$rand.'.txt</strong>';
// } else {
//     echo 'ERROr renaming.';
// }








?>

<!-- 
 <form action="upload.php" method="post" enctype="multipart/form-data" >
   
   <input type="file" name="file" ><br> <br>
   <input type="submit" value="submit">
</form>   -->
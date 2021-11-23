<?php
 

// echo 'welcome'.$_SESSION['username'].'.you are '.$_SESSION['age'].'!';



// echo $_COOKIE['username'];


// $_SESSION['username'] = 'osama';
// $_SESSION['favfood'] = 'chicken';
// echo '<a href = "page2.php"> Room number 2 ';



//$_SESSION['username']='Alex';
// setcookie('username','omar', '100'); 



// if (isset($_SESSION['username'])) {
//     echo 'welcome' .$_SESSION['username'];
  
// } else {
//     echo 'please log in';
// }

// $handle = fopen('osama.txt', 'r+'); 
// $content = fread($handle, 14);
// or
// echo filesize('osama.txt') ;
// $content = fread($handle, filesize('osama.txt'));
// echo $content;


// $handle = fopen('names.txt', 'w');
// fwrite($handle ,'alex'."\n");
// fwrite($handle,'billy');
// fclose($handle);
// echo 'written';


// setcookie("zero","Test",time() + 3600 ,"/");
// if (count($_COOKIE)>0) {
//     echo "goodthe cookies are enabeled";
// } else {
//     echo "sorry";
// }



// setcookie("zero","Test",time() + 3600 ,"/");






// $directory = 'files';

// if ($handle = opendir($directory.'/')) {
//     echo "looking inside \''.$directory.'\':<br>";
// while ($file = readdir($handle)) {
//     if ($file!='.'&&$file!='..') {
//         echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
//     }
// }

// }




$name= $_FILES['file']['name'];
$extension = strtolower(substr($name , strpos($name , '.') + 1));
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];
$max_size = 100000000;
$tmp_name = $_FILES['file']['tmp_name'];



if (isset($name)) {
    if (!empty($name)) {
        
 if (($extension=='jpg'||$extension=='jpeg')&& $type=='image/jpeg' && $size<=$max_size) {
 
    $location = 'uploads/';


if (move_uploaded_file($tmp_name, $location.$name)) {
    
    echo'uploaded!';
} else {
    echo 'there was an error.';
}



 } else {
     echo 'file must be jpg/jpeg and must be 2mb or less.';
 }



    }
}














?>
<form action="view.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="submit" value="submit">
</form>
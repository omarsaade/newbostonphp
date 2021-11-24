<?php
ob_start();// , ma5zan mo2akat
session_start();// session deyman 
$current_file = $_SERVER['SCRIPT_NAME'];// esem el hala2 file 
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])) {
$http_referer = $_SERVER['HTTP_REFERER'];
}
function loggedin() {
    if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])) {
       return true ;
    } else {
        return false ;
    }
}

function getuserfield($field) {
  
    global $conn;
    $query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
   
    if ($query_run=mysqli_query($conn , $query)) {
       if($query_result= mysqli_fetch_assoc($query_run)){
  
        return $query_result[$field] ;
           
          
          

       }
      
    }
}


?>
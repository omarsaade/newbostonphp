<?php
require 'Connecto.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];





function ip_exists($ip){
 
     global $conn;
     global $user_ip;
 $query = "SELECT `ip` FROM `hits_ip` WHERE `ip`='$user_ip'";
 $query_run = mysqli_query($conn , $query);
 $query_num_rows = mysqli_num_rows($query_run);//22
 

       if ($query_num_rows==0) {
            return false ;
         } else if ($query_num_rows>=1) {
           return true;//yes
            }
}






function ip_add($ip) {
    
    global $conn;
    $query = "INSERT INTO `hits_ip` VALUES ('$ip')";
    $query_run = mysqli_query($conn,$query);
    
}









function update_count() {
     global $conn;
     $query = "SELECT `count` FROM `hits_count`";
    
    
    if ($query_run = mysqli_query($conn, $query)) {
           $count = mysqli_fetch_assoc($query_run);
          
            $count_inc = $count['count'] + 1;
            
        
            $query_update = "UPDATE `hits_count` SET `count`= '$count_inc'";
            $query_update_run = mysqli_query($conn ,$query_update);
           }
}







if(!ip_exists($user_ip)) {
    update_count();
    ip_add($user_ip);
}







?>

<h1>MY page</h1>
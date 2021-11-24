<?php
$conn_error = "could not connect";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn = @mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass)||!mysqli_select_db($conn , "a_database")){
   
    die($conn_error);}

  if (isset($_POST['username'])&&isset($_POST['password'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];
     if (!empty($username)&&!empty($password)) {
         echo $username.'<br>'.$password;
         $query = "SELECT `id` FROM `users` WHERE `username` = '$username' AND `password`='$password'";
         echo $query;
         $query_run =  mysqli_query($conn,$query);
         var_dump($query_run);


         if (mysqli_num_rows($query_run)>=1) {
             echo 'LOGIN SUCCESS';
         } else {
             echo "invalid username/password combination";
         }
     }
  }



    
    ?>



<form action="injection.php" method="post">
    Username: <input type="text" name="username">
    Password: <input type="text" name="password">
    <input type="submit" value="Submit">
</form>
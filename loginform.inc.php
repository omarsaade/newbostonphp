<?php
   if (isset($_POST['username'])&&isset($_POST['password'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];
       $password_hash = md5($password);
      }

if (!empty($username)&&!empty($password)) {
         $query =  "SELECT `id` FROM `users` WHERE `username`='".mysqli_real_escape_string($conn,$username)."' AND `password`='".mysqli_real_escape_string($conn,$password_hash)."'";
         if ($query_run=mysqli_query($conn , $query)) {
              $query_num_rows = mysqli_num_rows($query_run);
                  if ($query_num_rows==0) {
                         echo "invalid username/password combination.";
                    }
                    else if ($query_num_rows==1){
                    $user_id = mysqli_fetch_assoc($query_run);
                    echo $user_id["id"];
                   

                    $_SESSION['user_id'] = $user_id["id"];
                    header('Location: ct.php');
                    }
          }
     } else {
        echo 'you must apply a username and password.';
 }
   
   


?>



<form   action="<?php echo $current_file;?>"       method="POST">
username : <input type="text" name="username" > Password : <input type="password" name="password" >
           <input type="submit" value="log in">
</form>
<?php
require 'core.inc.php';
require 'connec.inc.php';

if (!loggedin()) {
   
    if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];
        $password_hash = md5($password);
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
             if (!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)) {
                 if ($password!=$password_again) {
                    echo 'passwords do not match';
                    }  else {
                       $query = "SELECT `username` FROM `users` WHERE `username`='".mysqli_real_escape_string($conn,$username)."'";
                       $query_run = mysqli_query($conn , $query);
                           if (mysqli_num_rows($query_run)==1) {
                              echo 'The username'.$username.' already exists.';
                             } else {
                           
                                $query = "INSERT INTO `users` VALUES('','".mysqli_real_escape_string($conn,htmlentities($username))."','".mysqli_real_escape_string($conn,$password_hash)."','".mysqli_real_escape_string($conn,htmlentities($firstname))."','".mysqli_real_escape_string($conn,htmlentities($surname))."')";
                            if ($query_run=mysqli_query($conn,$query)) {
                                header('Location:register_success.php');
                            } else {
                                echo 'sorry, we couldnt register you at this time.try again later.';
                            }    
                            }
                                }

                                } else {
                               echo "all fileds are required";
                             }
                            }
       
                                
                          ?>
                      
<form action="register.php"  method="post">
    Username:<br> <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
    Password:<br> <input type="password" name="password" id=""><br><br>
    Password again:<br> <input type="password" name="password_again" id=""><br><br>
    Firstname:<br> <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br>
    surname:<br> <input type="text" name="surname" value="<?php echo $surname; ?>"><br><br>
    <input type="submit" value="Register">
</form>  
<?php 
} else if (loggedin()) {
  echo 'YOU are already registred and logged in.';
 } ?>
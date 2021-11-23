<?php
// require 'Connecto.inc.php';
?>
<form action="new.php" method="get">
    Choose a food type:
    <select name="uh">
        <option value="u">Unhealhty</option>
        <option value="h">healthy</option>
    </select><br><br>
    <input type="submit" value="submit">
</form>

<?php
// $user_ip = $_SERVER['REMOTE_ADDR'];
// var_dump($user_ip);
if (isset($_GET['uh'])&& !empty($_GET['uh'])) {
     $uh = strtolower($_GET['uh']);
   
    if ($uh=='u'||$uh=='h') {
       
   

   $query = "SELECT `food`,`calories`FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC";
   if ($query_run =  mysqli_query($conn,$query)) {

     if(mysqli_num_rows($query_run)==NULL) {
     echo "NO results found.";
      } else {

         while($query_row = mysqli_fetch_assoc($query_run)) {
            //Var_dump($query_row);

       $food = $query_row['food'];
      $calories = $query_row['calories'];
       echo $food.' has '.$calories.' calories.<br> ';
      }

         }







          } else {
        echo mysqli_error($conn);
         }
    
    } 
}
?>

<!-- SELECT `firstame`, `surname` FROM `users` WHERE `username`=`alex` AND `password`='p' -->
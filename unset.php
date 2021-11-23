<?php
// session_start();
// session_destroy();

// $filename = 'names.txt';
// $handle = fopen($filename, 'r');
// $datain = fread($handle , filesize($filename));
// $names_array = explode(',', $datain);
// echo $names_array[0];


// $names_array = array('alex','billy','Dale');
// $string = implode('-' , $names_array);
// echo $string;



if (isset($_POST['name'])) {
    $name= $_POST['name'];
    if (!empty($name)) {
        $handle = fopen('names.txt' , 'a');
       fwrite($handle , $name."\n");
       fclose($handle);
       echo "current name in file";
    

$count = 1;
$readin = file('names.txt');
$readin_count = count($readin);



       foreach($readin as $fname) {
           echo trim($fname);
           if ($count<$readin_count) {
               echo ', ';
           }
           $count++;
       }

    } else {
        echo 'please type a name';

    
    }
}





?>
<form action="unset.php" method="post">
    <input type="text" name="name" id="">
    <input type="submit" value="submit">
</form>
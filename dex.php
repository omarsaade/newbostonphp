<?php
//mysqli_connect('localhost','root','');

/*session_start();

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0; 
}

if(isset($_GET['dec'])) {
    $_SESSION['counter']--;
} else if (isset($_GET['inc'])) {
    $_SESSION['counter']++;
}

echo $_SESSION['counter'];
?>

<form action="index.php" method="get">
    <input type="submit" name="dec" value="dec">
    <input type="submit" name="inc" value="inc">
</form>*/
/*$string = "this is omar.";
if (preg_match('/is/', $string)) {
    echo "match found";
}
else {
        echo "match not found";
    }*/
//
//
//
/*function myname(){
    echo "alex";
}

echo "my name is ";
echo myname();*/

/*function myadd($number1 , $number2){
    $result = $number1 + $number2 ;
    echo $result;
}

myadd(3,1);*/

/*function displaydate($day,$month,$year){
 
    echo $day." ". $month." ". $year ;

}
displaydate("monday ", 2, 2020);*/
//

 /*$userip = $_SERVER['REMOTE_ADDR'];

function ip() {
    global $userip;
    
    $string = "your ip adress is ".$userip;
    echo $string;
}
ip();
globalllllllllllll*/ 

//$food = array('pasta'=>150 ,'pizza'=>300,'salad'=>150,' vegetables'=>100);
//echo $food['pasta'];
//$string = 'this is an example string.';
//$string_word_count = str_word_count($string);

//echo $string_word_count;

/*$string ='image.jpg';
$string_reversed = strrev($string);
echo $string_reversed;
*/



/*$str1 = " hello my name is omar";
$str2 = " hello my my names is ammur";
 similar_text($str1 , $str2 , $percent);
 echo $percent;*/

 /*$string = 'thi sis anasajs';
 $string_length = strlen($string);
 echo $string_length;*/
/*
 $string ='this is an example string';
 $string_shuffled = str_shuffle($string);
 $half = substr($string_shuffled , 0 ,5);
 echo $half; 566666 shuffleeee */

//$string=  '&nbsp;+ hello <br> "world'; 
//$string_slashes = htmlentities(addslashes($string));
//echo $string_slashes;//  37

/* $fruits =array('a', 'b' ,'c');
 echo $fruits[1]; get
 $fruits[3]= 'd'; post
 print_r($fruits);     printttt echooooo
 
 */   
/*$food = array('healthy'=>
          array('pasta','vegetable','salad'),

          'unhealthy'=>
          array('burko'));


        echo $food['healthy'][1];     */
        
       // require_once or require 'omar.php'
      /* if (defined('header.php'))
       {
           require 'header.php';
       }  same assssss require_once or include once */


      // require "dex.php";
//require_once "dex.php";
//include_once "dex.php";
// echo (10, 10) / (5 , 5);
// function add( $n1 , $n2 ) {
//     // $result = $n1 + $n2 ;
//     return $result ;
// }
// function divide($n1 , $n2){
    // $res = $n1 / $n2 ;
    // return $res ;
// }

// $sum = divide(add(10 , 10), add(5 ,5));
// echo $sum;

// $string = 'this is a string';
// if(preg_match('/ /', $string)) {
//     echo "match found";
// } else {
//     echo 'no match found';
// }



// function has_space($string){
//   return preg_match('/ /' , $string);
// }

// $string = 'hahah hahah ahahah';

// if (has_space($string
// )) {
//     echo " has at least one space";
// } else {
//     echo "has no space";
// }
// if (isset($_GET['user_name'])) { // !emty v43
//     $user_name = $_GET['user_name'];
//     $user = strtolower($user_name);

//     if($user=='alex') {
//     echo "you are the best";
//     }
// }


// 
// <form action="index.php" method="get">


 
// <input type="text"  name="user_name" >
// <input type="submit" name = "Name" >
// </form>

// $offset= 0 ;
// $find = "is";
// $find_length = strlen($find);
// $string = "this is me is omar";

// while ($string_position = strpos($string , $find , $offset)) {
    
// }

//$string = 'alex';
// $string_length = strlen($string);


// for ($x=0; $x < $string_length ; $x++) { 
//     echo $x."<br>";

// }


// $food = array('healthy'=>
//                array('salad','vegetbales','pasta'),
//  'unhealthy'=> 
//            array('pizza','ice cream' ,'popcorn'));

//  foreach($food as $element => $inner_array) {
//   echo '<strong>'.$element.'</strong><br>';
//   foreach($inner_array as $item) {
//       echo $item.'<br>';
//   }


// //  }

// $offset = 4 ;
// $find = "is";
// $find_length = strlen($find);
// $string = "this is a string , and this is an example";

// while ($string_position = strpos($string , $find , $offset)) {
//     echo '<strong>'.$find.'<strong> found at '.$string_position.'<br>';
//     $offset = $string_position + $find_length;
// }


//v4888888888888888888888
// $amur =array('is','name','omar');
// $amer = array('IS','NAMO','OMAR');
// $string = "my name is omar  , and is from";

// $str_cut= str_replace($amur,$amer ,$string);
// echo $str_cut;

//$string = "hello world";
//$string_length = substr_replace($string ,'alex' , 3 , 4);

//echo $string_length;

// if (isset($_POST["text"])&&!empty($_POST["text"]) && isset($_POST["tex"])&&!empty($_POST["tex"])&&isset($_POST["te"])&&!empty($_POST["te"])) {
//     echo $textareaz = $_POST["text"];
//     echo $textare =$_POST["tex"] ;
//     echo $textar =$_POST["te"] ;

// } else {
//     echo "please fill in the  fields";
// }
// 566666666


// $redirect_page = 'https://www.google.com/';
// $redirect = true ;
// header('Location: '.$redirect_page);


// $time = time();
// $actual_time = date('D M Y @ H:i:s', $time);
// $time_modified = date('D M Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));
// echo "the current time is" .$actual_time . "and the modified time is". $time_modified;



// if (isset($_POST['roll'])) {
//     $rand = rand(1,6);
//     echo "you rolled ".$rand ;
// }

// 

// <form action="index.php" method="post">
//     <input type="submit" value="Roll dice" name="roll">
// </form>



//   $browser = get_browser(null, true);

//   print_r($browser);


//      echo $browser["win16"];





 

// $remote_addr = $_SERVER['REMOTE_ADDR'];

// if (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
//     $ip_address = $_SERVER['HTTP_CLIENT_IP'];
// } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ){
//     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
// } else {
//     $ip_address = $remote_addr;
// }
// echo $ip_address;
 
// $offset = 0;
//  if (isset($_POST['text']) && isset($_POST['searchfor']) &&  isset($_POST['replacewith']) )
//   { 

// $text = $_POST["text"];
//       $search = $_POST["searchfor"];
//       $replace = $_POST["replacewith"];
//      $search_length = strlen("$search");
//      if (!empty($text) && !empty($search) && !empty($replace)) {
//         while ($strpos= strpos($text ,$search , $offset)) {
//            $offset = $strpos + $search_length;
//            $text = substr_replace($text , $replace , $strpos , $search_length);
//         }
//         echo $text ;

//      }

  
//     }
 
//  else {
//      echo " please fill in all the fields";
//  }



// $time = time();
// $actual_time = date('H : i :s', $time);
// $time_modified = date ('H : i : s' , strtotime('+ 1 week 2 hours'));
// echo 'the current time is'. $actual_time ."<br>";
// echo 'the current time is'. $time_modified;










// if (isset($_POST['rand'])) {
//     $rand = rand(1,6);
//     echo $rand;
    
// }







// require('dex.php');
// echo '<img src ="' .$images.'header.gif"/>';




// $ip_address = $_SERVER['REMOTE_ADDR'];
// $ip_blocked = array('127.0.0.1','100.100.100.100');





















 ?>


   <!-- <form action="index.php" method="POST">

    <br> <input type="submit" value="Roll dice" name="rand">

  </form>  -->
<!-- <form action="index.php" method="get">
   Day <br><input type="text" name="day" id=""><br>
   Date<br><input type="text" name="date" id=""><br>
   Year<br><input type="text" name="year" id=""><br><br>
    <input type="submit" value="">
</form> -->
 
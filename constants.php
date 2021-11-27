<?php
 class Circle {
     const pi = 3.14;// self deyman bteje ma3 constant && self hye lal 
   
 public function Area($radius) {
     return self:: pi * ($radius*$radius);
 }





 }

//  $circle = new Circle();
//  echo $circle::pi; we can put like this
// or this down
$circle  = new Circle;
echo Circle::pi;



?>
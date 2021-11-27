<?php

class Example {

 public function  __construct($something) { // mujarad ma na3mul initial lal class bi sater
    // 4 hye bta3mul run degre awal shi w hye btmare2 ma3lume w bt5alina nestagne 3an 
    // $example->Saysomething();
    $this->Saysomething($something);
} 
public function Saysomething($something) {
    echo $something ;
}
}
$example = new Example('some text');// 4

?>
<?php
$age = 16 ;

try {
    if ($age>18) {
        echo 'old enough.';
    } else {
        throw new Exception ('NOt old enough.');
    }
} catch (Exception $ex) {
    echo 'Error: '.$ex->getMessage();

}




?>
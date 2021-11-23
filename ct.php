<?php
require 'core.inc.php';// fia session ,
require 'connec.inc.php';// connect deyman 3a database

if (loggedin()) {
    $firstname = getuserfield('firstname');
    $surname = getuserfield('surname');
   echo 'you logged in.'.$firstname.' '.$surname.'.<a href="logout.php">log out</a>';// not working

} else {
    include 'loginform.inc.php';
}
































?>
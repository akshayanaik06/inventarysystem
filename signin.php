<?php

include_once('Getlogin.php');

$loginObj = new Login();

$adminname=$_POST['username'];
$adminpass=$_POST['password'];

$loginObj->getuser($adminname,$adminpass);
?>
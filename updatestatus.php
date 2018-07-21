<?php

include_once('Getlogin.php');

$loginObj = new Login();

$catid=$_POST['cat_id'];
$status=$_POST['status'];

$loginObj->updatecategorystatus($catid,$status);
?>
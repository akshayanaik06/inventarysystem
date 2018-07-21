<?php

include_once('Getlogin.php');

$updatemanuObj = new Login();

$id=$_POST['manu_id'];
$name=$_POST['manu_name'];

$updatemanuObj->updatemanufacture($id,$name);
?>
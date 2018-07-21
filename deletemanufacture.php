<?php

include_once('Getlogin.php');

$updatemanuObj = new Login();

$manu_id=$_POST['id'];
$updatemanuObj->deletemanufacture($manu_id);
?>
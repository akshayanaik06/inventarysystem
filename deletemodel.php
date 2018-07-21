<?php

include_once('Getlogin.php');
$deletemodelObj = new Login();
$model_id=$_POST['model_id'];
$deletemodelObj->deletemodel($model_id);
?>
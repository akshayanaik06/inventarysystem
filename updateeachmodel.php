<?php
include_once('Getlogin.php');

$updatecar = new Login();

$model_id = $_POST['model_id'];
$model_name = $_POST['model_name'];
$desc = $_POST['desc'];
$color = $_POST['color'];
$manu_year = $_POST['manu_year'];
$manufacture = $_POST['manufacture'];

$updatecar->updatecardetails($model_name,$desc,$color,$manu_year,$manufacture);

$updatecar->updateeachmodel($model_id);
?>
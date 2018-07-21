<?php
include_once('Getlogin.php');

$insertmanufacture = new Login();
$manufacture_name = $_POST['manufacture_name'];

$insertmanufacture->setmanufacturevalue($manufacture_name);

$insertmanufacture->insertsetmanufacturevalue();


?>
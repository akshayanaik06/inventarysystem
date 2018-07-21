<?php
include_once('Getlogin.php');

$insertdetails = new Login();
$targetPath1 ='';
$targetPath2 ='';
$name1 = $_FILES['car_photo1']['name'];
$tmp_name1 = $_FILES['car_photo1']['tmp_name'];
$name2 = $_FILES['car_photo2']['name'];
$tmp_name2 = $_FILES['car_photo2']['tmp_name'];
$path = 'uploads/models/';
if(!empty($name1))
 {
 //Moving file to temporary location to upload path
 move_uploaded_file($tmp_name1,$path.$name1);
 $targetPath1 =$path.$name1;
}
if(!empty($name2))
{
	//Moving file to temporary location to upload path
	 move_uploaded_file($tmp_name2,$path.$name2);
	 $targetPath2 =$path.$name2;
}


$model_name = $_POST['model_name'];
$desc = $_POST['desc'];
$color = $_POST['color'];
$manu_year = $_POST['manu_year'];
$manufacture = $_POST['manufacture'];
 
$insertdetails->setcardetails($model_name,$desc,$color,$manu_year,$manufacture,$targetPath1,$targetPath2);

$insertdetails->insertcardata();


?>
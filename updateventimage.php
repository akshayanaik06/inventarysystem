<?php
include_once('Getlogin.php');
$updateeventsimage = new Login();
$name2 = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$path = '../uploads/events/';
if(!empty($name2))
 {
 //Moving file to temporary location to upload path
 move_uploaded_file($tmp_name,$path.$name2);
 $targetPath =$path.$name2;
}
else
{
	$targetPath ='';
}

$event_id = $_POST['event_id'];

$updateeventsimage->updateeventimage($targetPath,$event_id);


?>
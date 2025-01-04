<?php 
include('config.php');
 require('textlocal.class.php');
 session_start();
$qry=mysqli_query($con,"insert into booking values('','".$_SESSION['user']."','".$_POST['sp_id']."','".$_POST['type']."','".$_POST['ab']."','".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['date']."','".$_POST['time']."')"); 
if($qry)
{
	$textlocal = new Textlocal(false, false,'DOVzDgytv6s-yF7ihyVHvtQhJciPpsM4OcDwzvTZ7G');
	$sender="MSD";
	$message="";
	$numbers = array($_POST['phone']);
	//$result = $textlocal->sendSms($numbers, $message, $sender);
	echo "Your SERVIVICE is Booked";
}
else
{
	echo "sorry";
}?>
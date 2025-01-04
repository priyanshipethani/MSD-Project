<?php 
include("config.php");
$qry=mysqli_query($con,"insert into feedback values('','".$_POST['name']."','".$_POST['subject']."','".$_POST['email']."','".$_POST['msg']."')");
if($qry)
{
	echo "OK";
}
else
{
 	echo "Sorry";
 } ?>
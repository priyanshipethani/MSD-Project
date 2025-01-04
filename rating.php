<?php
include('config.php');
session_start();
$qry=mysqli_query($con,"insert into rating values('','".$_POST['id']."','".$_SESSION['user']."','".$_POST['rate']."','".$_POST['revi']."')");
if($qry)
{
	echo "Submited Successfuly...";
}
else
{
	echo "Sorry";
}

?>

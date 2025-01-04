<?php include('config.php');
$qry=mysqli_query($con,"delete from booking where id='".$_GET['id']."'");

if($qry)
{
	echo "<script>alert('Deleted Successfuly..');</script>";
	echo "<script>window.location='my_booking.php';</script>";
}
else
{
	echo "<script>alert('Sorry Cant Deleted...');</script>";
	echo "<script>window.location='my_booking.php';</script>";
}
?>
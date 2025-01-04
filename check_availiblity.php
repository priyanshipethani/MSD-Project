<?php 
include('config.php');
$qry=mysqli_query($con,"select * from booking where sp_id='".$_POST['sp']."' and date='".$_POST['dt']."' and time='".$_POST['ttm']."'");
$row=mysqli_num_rows($qry);
if($row>0)
{
	echo "Sorry Please Select another Time Sloat";
}
else
{
	echo "continew...";
}?>
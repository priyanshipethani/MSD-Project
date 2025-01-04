<?php
require_once("config.php");

$query=mysqli_query($con,"SELECT * FROM services WHERE service_list like '" . $_POST["keyword"] . "%' ORDER BY service_list LIMIT 0,6");
$data=mysqli_num_rows($query);
echo "<ul class='list-unstyled'>";
if($data>0)
 {
 	while($row = mysqli_fetch_array($query))
 	{?>
 		<li style="text-align: left;"><a style="color: black;" href="services.php?id=<?php echo $row['id'];?>"><?php echo $row['service_list'];?></a></li>	

 		

 	<?php

 	}
 }
 else
 {
 	echo "Sorry";
 }?>
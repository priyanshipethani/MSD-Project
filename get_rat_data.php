<?php 
include('config.php');?>
<div id='u_data'>
	<?php $qry1=mysqli_query($con,"select * from service_person where id='".$_POST['id']."'");
   ?>
   
     <?php 
     $row1=mysqli_fetch_array($qry1);
     ?>
 
   <div class="row" style="margin-top: 10px;">
   		<div class="col-md-3"></div>
   		<div class="col-md-1">
   			<img class="img-circle" style="width: 80px;" src="img/<?php echo $row1['image']; ?>">
   		</div>
   		<div class="col-md-2" style="text-transform: uppercase;"><b><?php echo $row1['name']; ?></b><br>
   		<?php $ty=mysqli_query($con,"select * from rating where sp_id='".$row1['id']."'");
   		$row2=mysqli_fetch_array($ty);
   		
   		for ($i=1; $i <=5; $i++) 
   		{ 
   			if($i<=$row2['rating'])
   			{
   				echo "<span style='color:yellow;font-size:20px;' class='fa fa-star'></span>";
   			}
   			else
   			{
   				echo "<span style='color:black;font-size:20px;' class='fa fa-star'></span>";
   			}
   		}
   		?>
   	</div>

   </div>
</div>

 
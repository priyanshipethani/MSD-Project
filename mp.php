<!DOCTYPE html>
<html>
<head>
	<title>MSD || Profile</title>
	<link rel="icon" href="img/nlogo.jpg.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<style>
	.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<body>
<?php session_start();
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}	
include('header.php');
?>
<div align="center" style="margin-top: 50px"> <span style="background: #C70039;font-size: 25px;border-radius: 20px;padding: 12px 140px;"><b>My Profile</b></span></div>

  <?php
						$bk=mysqli_query($con,"select * from user_registration where id='".$_SESSION['user']."'");
								$bk2=mysqli_query($con,"select * from login where id='".$_SESSION['user']."'");
								$row2=mysqli_fetch_array($bk2);?>
							<?php 
							
						if($row=mysqli_fetch_array($bk))
		?>
<div class="card" style="margin-top: 30px">
<img src="<?php echo $row['user_image'];?>" style="width:100%;height: 80%"><br>
<h2><b><div><?php echo $row['name'];?></div></b></h2><br></div><br>

<h5><div align="center"><b>Email:</b> <?php echo $row2['email'];?></div></h5>
<h5><div align="center"><b>Phone:</b> <?php echo $row['phone'];?></div></h5>
<h5><div align="center"><b>Address:</b> <?php echo $row['address'];?></div></h5>


</div>


</html>
<?php
	include('footer.php');
?>
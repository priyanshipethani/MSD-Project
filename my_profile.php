<!DOCTYPE html>
<html>
<head>
	<title>Movie World | Profile</title>
	<link rel="icon" href="images/logo_p2.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<style>
	
	#update_profile{
		position: relative;
		top:-50px;
		width: 100px;
		margin-left: 95px;
		cursor: pointer;
		color: white;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.1);
		transform: translate(-50%,-50%);
	}
	.p_photo:hover{
		opacity: 0.8;
		cursor: pointer;
	}
	#update_profile:hover{
		background:white;
		opacity: 0.9;
		border-radius: 20px;

		color: red;
	}
	#button_profile
	{
		position: absolute;
		top: 82%;
		left:50%;
		cursor: pointer;
		transform: translate(-50%,-50%);
	}
	.h_nm{
		border-radius: 15px;
		background-color: #66B2FF;
		padding: 5px;
		font-weight: bold;
	}
	.h_data{
		border-radius: 15px;
		background-color: #9999FF;
		padding: 5px;
		font-weight: bold;
	}
	.row{
		padding: 10px;
	}
</style>
<body>
<?php session_start();
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
include('header.php');
	if(isset($_POST['s1']))
	{
		$rt = mt_rand(10000, 99999);
	    $target_dir = "user_image/";
	    $target_file = $target_dir .$rt. basename($_FILES["up_pic"]["name"]);    
	    $flname="user_image/".$rt.basename($_FILES["up_pic"]["name"]);
	    $qur=mysqli_query($con,"update tbl_registration set user_pic='$flname' where user_id='".$_SESSION['user']."'");
        if($qur)
        {
	    	echo "<script>alert(Uploaded Successfuly...);</scrippt>";
	    	move_uploaded_file($_FILES["up_pic"]["tmp_name"], $target_file);
	    	echo "<script>location.reload();</script>";           
        }
        else
        {
	    	echo "<scipt>alert(Sorry Can't Update..);</scrippt>";
        }
	}?>
<div class="content">
	<div class="wrap">	
		<div class="content-top">
			<div class="section group">
				<div class="about span_1_of_2">	
						<h3 align="center">My Profile</h3>
						<div align="center"><img src="img\nlogo.jpg.png" class="img-circle"></div>
						<?php
						$bk=mysqli_query($con,"select * from user_registration where id='".$_SESSION['user']."'");
								$bk2=mysqli_query($con,"select * from login where id='".$_SESSION['user']."'");
								$row2=mysqli_fetch_array($bk2);?>
							<?php 
							
						if($row=mysqli_fetch_array($bk))
						{	?>
							
							<div class="row frm1">
								
								<div class="col-md-10" align="center">
								
									<div class="row" align="center">
										<div class="col-md-2"></div>
										<div class="col-md-3 h_nm">User Name</div>
										<div class="col-md-1"></div>
										<div class="col-md-6 h_data"><span style="
										float: left;" class="glyphicon glyphicon-user"></span><?php echo $row2['email'];?></div>
									</div>
									<div class="row" align="center">
										<div class="col-md-2"></div>
										<div class="col-md-3 h_nm">Name</div>
										<div class="col-md-1"></div>
										<div class="col-md-6 h_data"><span style="
										float: left;" class="glyphicon glyphicon-user"></span><?php echo $row['name'];?></div>
									</div>
									<div class="row" align="center">
										<div class="col-md-2"></div>
										<div class="col-md-3 h_nm">Phone</div>
										<div class="col-md-1"></div>
										<div class="col-md-6 h_data"><span style="
										float: left;" class="glyphicon glyphicon-phone"></span><?php echo $row['phone'];?></div>
									</div>
									<div class="row" align="center">
										<div class="col-md-2"></div>
										<div class="col-md-3 h_nm">Address</div>
										<div class="col-md-1"></div>
										<div class="col-md-6 h_data"><span style="
										float: left;" class="glyphicon glyphicon-user"></span><?php echo $row['address'];?></div>
									</div>
									
							</div>
							<div class="col-md-1"></div>
						</div>
						<div class="frm2"></div>
						<?php 
								} ?>
				</div>
				<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			        <div class="modal-dialog"> 
			            <div class="modal-content">		                  
			                        <div class="modal-header"> 
			                            <button type="button" class="close" data-dismiss="modal">&times;</button>
			                            <h4 class="modal-title">
			                              <i class="glyphicon glyphicon-plus" style="color: green"></i> Update Profile
			                            </h4> 
			                        </div> 
	                       			<div class="modal-body"> 
	                            
	                           		<!-- content will be load here -->                          
	                           		<div id="dynamic-content"></div>
	                             
	                        		</div> 
	                        		<div class="modal-footer"> 
	                             		<p style="font-weight: bold;">Thank you Movie World</p>
	                        		</div> 
	                        
	                 	</div> 
	              	</div>
        		</div>
						
			</div>
			<div class="clear"></div>		
		</div>		
	</div>
</div>
</body>
</html>
<?php include('footer.php');?>
<script>
function ValidateSize(file) 
{
  var FileSize = file.files[0].size / 1024 / 1024; // in MB
  var filename=document.getElementById('up_pic').value;
  
  var extension=filename.substr(filename.lastIndexOf('.')+1).toLowerCase();
  //alert(extension);
  if(extension=='jpg' || extension=='gif' || extension=='jpeg') 
  {
    if (FileSize > 2) {
        alert('File size exceeds 2 MB');
        document.querySelector('.up_pic').value = "";
       // $(file).val(''); //for clearing with Jquery
    }
    else
    {
    	document.getElementById("bnt-up_pic").style.display="block";
    	document.getElementById("update_profile").style.display="none";
    }
  }
  else
  {
    alert('Please select Only jpg,jpeg image only..');
  }
}

 // load dynamic bootstrap model
  
    $(document).on('click', '#up_act', function(e){
    
      e.preventDefault();
      
      $('#dynamic-content').html(''); // leave it blank before ajax call
      $('#modal-loader').show();      // load ajax loader
      
      $.ajax({
        url: 'modify_profile.php',
        type: 'POST',
        data: 'id='+<?php echo $_SESSION['user'];?>,
        dataType: 'html'
      })
      .done(function(data){
        console.log(data);  
        $('#dynamic-content').html('');    
        $('#dynamic-content').html(data); // load response 
        $('#modal-loader').hide();      // hide ajax loader 
      })
      .fail(function(){
        $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
        $('#modal-loader').hide();
      });
      
    });
  


$(document).on('click', '#save_new_data', function()
{
  name=$('#new_name').val();
  phone=$('#new_phone').val();
  age=$('#new_age').val();
  gender=$('#new_gender').val();
  sec_que=$('#new_sec_que').val();
  sec_ans=$('#new_sec_ans').val();
  if(name=="")
  {
    alert("Enter Name");
  }
  else if(phone=="")
  {
    alert("Enter Phone");
  }
  else if(age=="")
  {
    alert("Enter Age");
  }
  else if(gender=="none")
  {
    alert("Enter Gender");
  }
  else if(sec_que==0)
  {
    alert("Enter Select Security Quetion");
  }
   else if(sec_ans=="")
  {
    alert("Enter Security Answer");
  }
  else
  {
    $.ajax({
        url: 'update_profile.php',
        type: 'POST',
        data: 'id='+<?php echo $_SESSION['user'];?>+'&name='+name+'&phone='+phone+'&age='+age+'&gender='+gender+'&sec_que='+sec_que+'&sec_ans='+sec_ans,
        dataType: 'html'
      })
      .done(function(data){
      	alert("Updated Successfuly....");
        $('#view-modal').modal('toggle');
        location.reload();
      })
      .fail(function(){
        $('#view-modal').modal('toggle');
      });
  }
  
});

</script>
  <?php include("header.php");
  include('config.php');
  
    if(isset($_POST['submit1']))
    {
      $rt=mt_rand(10000,99999);
      $target_dir="img/clients/";
      $target_file=$target_dir.$rt. basename($_FILES["image"]["name"]);
      $fname=$target_dir.$rt.basename($_FILES["image"]["name"]);
      $encpass=md5($_POST['password']);
      mysqli_query($con,"insert into user_registration values('','".$_POST['name']."','$fname','".$_POST['address']."','".$_POST['phone']."')");

      $id=mysqli_insert_id($con);
      $qry2=mysqli_query($con,"insert into login values('$id','".$_POST['email']."','$encpass','2','1')");
       move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
      if($qry2)
      {
        echo "<script>alert('Registration Successfuly');</script>";
        echo "<script>window.location='index.php';</script>";       
      }

      else
      {
        echo "<script>alert('Sorry Data Not Inserted')</script>";
      }    
    }
  ?>

  <div class="container" style="">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form" enctype="multipart/form-data" >
<fieldset>
<div align="center"><img src="img/nlogo.jpg.png"></div>
<!-- Form Name -->
<legend style="background-image: linear-gradient(to right,#0A2FA9,#3D5BC0,#607DDB);color:white;border-radius: 10px;"><center><h2><b>User Registration Form</b></h2></center></legend><br>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user" style="color: #003151";></i></span> <input  name="name" placeholder="Enter Name" id="name"class="form-control"  type="text" required>
  </div><span id="nm" style="color:red;"></span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-location-arrow" style="color: #003151";></i></span> <input  name="address" placeholder="Enter Address" class="form-control" id="address" type="text" required>
    </div><span id="add" style="color:red;"></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-phone" style="color: #003151";></i></span> <input  name="phone" placeholder="Enter Phone" id="phone" class="form-control"  type="text" maxlength="10" required>
    </div><span id="ph" style="color:red;"></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope" style="color: #003151";></i></span> <input  name="email" placeholder="Enter E-mail" id="email" class="form-control"  type="email" required>
  </div><span id="em" style="color:red;"></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Image</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-picture-o" style="color: #003151";></i></span> <input  name="image" placeholder="Image" id="image" class="form-control"  type="file" required>
  </div><span id="img" style="color:red;"></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-eye" style="color: #003151";></i></span> <input  name="password" id="password" placeholder="Enter Password" class="form-control"  type="password" minlength="6" maxlength="8" required >
    </div><span id="pass" style="color:red;"></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">C-Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-eye" style="color: #003151";></i></span> <input  name="fullname" placeholder="Enter Confirm password" id="confi_password" class="form-control"  type="password" minlength="6" maxlength="8" required>
    </div><span id="cpass" style="color:red;">
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <div class="row" style="padding-top: 10px;">
    <div class="col-md-4"></div>
  <div class="col-md-2">
    <input type="submit" class="btn btn-primary" name="submit1" onclick="return(validation());" style="width: 100%;background-color: black" value="submit">
  </div>
    
   <div class="col-md-2">
    <button type="Cancle" class="btn btn-danger" style="width: 100%;">Cancel</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div><br><br><br><br><!-- /.container -->
<?php
  include('footer.php');
?>
<script type="text/javascript">
   function validation()
    {
        s_id=$("#s_Person").val();

        name=$("#name").val();
        address=$("#address").val();
        phone=$("#phone").val();
        email=$("#email").val();
        image=$("#image").val();
        password=$("#password").val();
        confi_password=$("#confi_password").val();
        var filter = /^[A-Za-z ]+$/;
        var filter2 = /^[0-9]+$/;
        if(name=="" && address=="" && phone=="" && email=="" && image=="" && password=="" && confi_password=="")
        {
          document.getElementById("nm").innerHTML="Please enter name";
          document.getElementById("add").innerHTML="Please Enter address";
          document.getElementById("ph").innerHTML="Please enter phone no.";
          document.getElementById("em").innerHTML="Please enter valid email";
          document.getElementById("img").innerHTML="Please Select image";
          document.getElementById("pass").innerHTML="please enter password";
          document.getElementById("cpass").innerHTML="please enter same password";
        }
        else if (name=="") 
        {
          document.getElementById("nm").innerHTML="Please enter name";
          return false;
        }
        else if (!filter.test(name)) 
        {
          document.getElementById("nm").innerHTML="Please Enter valid name";
          return false;
        }
         else if (address=="") 
        {
          document.getElementById("add").innerHTML="Please Enter address";
          return false;
        }
        else if (phone=="") 
        {
          document.getElementById("ph").innerHTML="Please enter phone no.";
          return false;
        }
        else if (!filter2.test(phone)) 
        {
          document.getElementById("ph").innerHTML="Please Enter only digit";
          return false;
        }
        else if (email=="") 
        {
          document.getElementById("em").innerHTML="Please enter valid email";
          return false;
        }
        else if (image=="") 
        {
          document.getElementById("img").innerHTML="Please Select image";
          return false;
        }
        else if(image.match(".jpg$")!=".jpg")
        {
          document.getElementById("img").innerHTML="Upload .JPG  file olny";
		  return false;
        }
        else if(password=="")
        {
          document.getElementById("pass").innerHTML="please enter password";
          return false;
        } 
        else if(confi_password=="")
        {
          document.getElementById("cpass").innerHTML="password enter Confirm-password";
          return false;
        }
        else if(password != confi_password)
        {
          document.getElementById("cpass").innerHTML="password not match....";
          return false;
        }
        else
        {
          return true;
        }


   
}

    
    
    

</script>

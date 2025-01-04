  <?php include("header.php");
  include('config.php');
  
    if(isset($_POST['submit1']))
    {
      $rt=mt_rand(10000,99999);
      $target_dir="img/clients/";
      $target_file=$target_dir.$rt. basename($_FILES["image"]["name"]);
      $fname=$target_dir.$rt.basename($_FILES["image"]["name"]);

      $qry=mysqli_query($con,"insert into user_registration values('','".$_POST['name']."','$fname','".$_POST['address']."','".$_POST['phone']."')");
      $id=mysqli_insert_id($con);

      mysqli_query($con,"insert into service_person2 values('$id','".$_POST['category']."','$fname','".$_POST['desc']."','".$_POST['price']."','".$_POST['type']."')");

      mysqli_query($con,"insert into login values('$id','".$_POST['email']."','".$_POST['password']."','1','0')");

      move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
     
      if($qry)
      {
        echo "<script>alert('REGISTRATIONH  SUCCESSFULLY')</script>"; 
        header("location:login.php");      
      }
      else
      {
        echo "<script>alert('Sorry Data Not Inserted')</script>";
      }   
    }
  ?>

  <div class="container" style="min-height: 130%">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>
<div align="center"><img src="img/spr.jpg" width="130px;" class="img-circle"></div>
<!-- Form Name -->
<legend style="color:#C70039;"><center><h2><b>Service Person Registration</b></h2></center></legend><br>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user" style="color: #003151";></i></span> <input  name="name" placeholder="Enter Name" id="name" class="form-control"  type="text" required><span id="nm" style="color:red;"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope" style="color: #003151";></i></span> <input  name="email" placeholder="Enter Email" class="form-control"  type="email" id="email" required><span id="em" style="color:red;"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Category</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user-plus" style="color: #003151";></i></span>
  <select class="form-control" name='category' id="cat">
    <option value="0">SELECT CATEGORY</option>
    <?php $qry=mysqli_query($con,"select DISTINCT service_list from services");
    while($row=mysqli_fetch_array($qry))
      {?>
        <option value="<?php echo $row['service_list'];?>"e><?php echo $row['service_list']; ?></option><?php
      }?>
  </select><span id="c" style="color:red;"></span>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Image</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-picture-o" style="color: #003151";></i></span> <input  name="image" placeholder="Image" class="form-control" id="image"  type="file" required=""><span id="img" style="color:red;"></span>
   </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Description</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user-secret" style="color: #003151";></i></span> <input  name="desc" placeholder="Enter Description" id="des" class="form-control"  type="text" required><span id="d" style="color:red;"></span>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-map-marker" style="color: #003151";></i></span> <input  name="address" placeholder="Enter Address" class="form-control" id="address" type="text" required><span id="add" style="color:red;"></span>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-phone" style="color: #003151";></i></span> <input  name="phone" placeholder="Enter Phone" class="form-control" id="phone" type="text" required=""  maxlength="10"><span id="ph" style="color:red;"></span>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">price</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-inr" style="color: #003151";></i></span> <input  name="price" placeholder="Starting Price" class="form-control"  type="text" id="price" required><span id="pr" style="color:red;"></span>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Type</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-chevron-down" style="color: #003151";></i></span> <input  name="type" placeholder="Enter Type" class="form-control" id="type"  type="text" required><span id="t" style="color:red;"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-eye" style="color: #003151";></i></span> <input  name="password" placeholder="Enter Password" class="form-control"  type="password" id="password"  minlength="6" maxlength="12" required>
  <span id="passs" style="color:red;"></span>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">C-Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-eye" style="color: #003151";></i></span> <input  name="c-password" placeholder="Enter C-Password" class="form-control"  type="password" id="confi_password"  minlength="6" maxlength="12" required><span id="pass" style="color:red;">
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="row" style="padding-top: 10px;">
    <div class="col-md-4"></div>
  <div class="col-md-2">
    <input type="submit" class="btn btn-primary" name="submit1" onclick="return(validation())" style="width: 100%;background-color: black" value="submit">
  </div>
    
   <div class="col-md-2">
    <button type="Cancle" class="btn btn-danger" style="width: 100%;">Cancel</button>
  </div>
</div>
</div>
</fieldset>
</form>
</div>
</div>
<br><br><br><br><br><br><br><!-- /.container -->
<?php
  include('footer.php');
?>
<script type="text/javascript">
function validation()
    {
        name=$("#name").val();
        email=$("#email").val();
        cat=$("#cat").val();
        image=$("#image").val();
        desc=$("#des").val();
        address=$("#address").val();
        phone=$("#phone").val();
        price=$("#price").val();
        type=$("#type").val();
        password=$("#password").val();
        confi_password=$("#confi_password").val();
        var filter = /^[A-Za-z ]+$/;
        var filter2 = /^[0-9]+$/;
        if(name=="" && email=="" && cat=="0" && image=="" && desc=="" && address=="" && phone=="" && price=="" && type==""
          && password=="" && confi_password=="")
        {
            document.getElementById("nm").innerHTML="Please enter name";
            document.getElementById("em").innerHTML="Please enter valid email";
            document.getElementById("c").innerHTML="Please Select Category";
            document.getElementById("img").innerHTML="Please Select image";
            document.getElementById("d").innerHTML="Please Enter desctription";
            document.getElementById("add").innerHTML="Please Enter address";
            document.getElementById("ph").innerHTML="Please Enter mobile no.";
            document.getElementById("pr").innerHTML="Please enter price";
            document.getElementById("t").innerHTML="please enter Type";
            document.getElementById("passs").innerHTML="please enter password";
            document.getElementById("pass").innerHTML="Please Enter same Password";
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
        else if (email=="") 
        {
          document.getElementById("em").innerHTML="Please enter valid email";
          return false;
        }
        else if (cat=="0") 
        {
          document.getElementById("c").innerHTML="Please Select Category";
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
        else if (desc=="") 
        {
          document.getElementById("d").innerHTML="Please Enter desctription";
          return false;
        }
        
        else if (address=="") 
        {
          document.getElementById("add").innerHTML="Please Enter address";
          return false;
        }
        else if (phone=="") 
        {
          document.getElementById("ph").innerHTML="Please enter Mobile no.";
          return false;
        }
        else if (!filter2.test(phone)) 
        {
          document.getElementById("ph").innerHTML="Please Enter only digits";
          return false;
        }
         else if (price=="") 
        {
          document.getElementById("pr").innerHTML="Please enter price";
          return false;
        }
        else if (!filter2.test(price)) 
        {
          document.getElementById("pr").innerHTML="Please Enter only digits";
          return false;
        }
         else if (type=="") 
        {
          document.getElementById("t").innerHTML="Please enter type";
          return false;
        }
        else if(password=="")
        {
          document.getElementById("passs").innerHTML="please enter password";
          return false;
        } 
        else if(confi_password=="")
        {
          document.getElementById("pass").innerHTML="password enter Confirm-password";
          return false;
        }
        else if(password != confi_password)
        {
        document.getElementById("pass").innerHTML="password not match....";
       
        return false;
        }
        else
        {
          return true;
        }


   
}

</script>

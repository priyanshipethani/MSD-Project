<?php include('header.php');
include('config.php');
if(isset($_POST['login']))
{
  
  $encpass=md5($_POST['password']);
  $qry=mysqli_query($con,"select * from login where email='".$_POST['username']."' and password='$encpass' and type='2' and status='1'");
  $c=mysqli_num_rows($qry);

  if($c>0)
  {$row=mysqli_fetch_array($qry);
    $_SESSION['user']=$row['id'];
    header('location:index.php');
  }
  else
  {?>
    <script>alert('Ivalid USername And Paasword');</script><?php
  }
}
 ?>
<style>
  .icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
</style>

 
<div class="container-fluid" style="background-image: url(img/login.jpg);background-repeat: no-repeat;background-size: cover;">
  <div class="d-flex justify-content-center h-100">
    <div class="card" style="margin-top: 80px;background-color: transparent;border:2px solid #C70039;margin-bottom: 100px;">
      <div class="card-header" style="border-bottom: 2px solid #C70039;margin-top: 15px;">
        <h3 style="color:black;font-weight: bold;">Login</h3>
        <div class="d-flex justify-content-end social_icon">
          <span style="color: blue;margin-top:25px;"><i class="fa fa-facebook-square"></i></span>
          <span style="color: red;margin-top: 25px;"><i class="fa fa-google-plus-square"></i></span>
        </div>
      </div>
      
      <div class="card-body">
        <form action="" method="post">            
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field form-control" type="email" placeholder="Enter Email" name="username" required>
            </div>
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field form-control" type="password" placeholder="Enter Password" name="password" required minlength="4" maxlength="10">
            </div>          
          <div class="row align-items-center remember"><br>
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group" style="padding-right: 135px;"><br>
            <input type="submit" value="Login" name="login" class="btn float-right login_btn">
          </div>
        </form>
      </div><br><br>
      <div class="card-footer">
        <div class="d-flex justify-content-center links" >
          <a href="registration.php" style="color: blue;font-weight: bold;">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="forgot.php" style="color: blue;font-weight: bold">Forgot your password?</a>
        </div>
        <div class="d-flex justify-content-center" style="padding-bottom: 220px;">
          <a href="admin/index.php" style="color: blue;font-weight: bold">Service Person Login</a>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
<?php 
  include ('footer.php');
?>

<?php include('header.php');
include('config.php'); 

if (isset($_POST['update_btn'])) 
{
  $qry=mysqli_query($con,"update login set password='".$_POST['password']."' where email='".$_SESSION['u_tmp']."'");
  header('location:index.php');
}
?>
 <style>
  .icon {
  padding: 10px;
  background: black;
  color: #C70033;
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

<div class="form-gap"></div>
<div class="container">
	<div class="row">
    <div class="col-md-4"></div>
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="">
                        <div class="input-container">
                                <i class="fa fa-key icon"></i>
                                  <input class="input-field form-control" type="password" placeholder="Enter password" name="password" id="password">
                        </div>

                        <div class="input-container">
                                <i class="fa fa-key icon"></i>
                                  <input class="input-field form-control" type="password" placeholder="confirm password" name="cpass" id="cpass">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="update_btn" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit" style="background-color: black">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
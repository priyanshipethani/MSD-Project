<?php include('header.php');
echo $_COOKIE['otp'];
if(isset($_POST['verifyotp'])) { 
	$otp = $_POST['otp'];
	if($_COOKIE['otp'] == $otp) {
		echo "Congratulation, Your mobile is verified.";
		header('location:forgot4.php');
	} else {
		echo "Please enter correct otp.";
		header('location:forgot3.php');
	}
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
                                <i class="fa fa-mobile icon"></i>
                                <input class="input-field form-control" type="text" placeholder="Enter mobile" name="otp" id="otp">
                        </div>

                      <div class="form-group">
                        <input name='verifyotp' class="btn btn-lg btn-primary btn-block" value="Verify OTP" type="submit" style="background-color: black">
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
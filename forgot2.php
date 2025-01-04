<?php include('header.php');
include('config.php');
$_SESSION['u_tmp']=$_POST['email'];

$qry=mysqli_query($con,"select * from login where email='".$_POST['email']."'");
$c=mysqli_num_rows($qry);
if($c>0)
{$row=mysqli_fetch_array($qry);
  $qry2=mysqli_query($con,"select * from user_registration where id='".$row['id']."'");
  $row2=mysqli_fetch_array($qry2);
  require('textlocal.class.php');
    $textlocal = new Textlocal(false, false,'DOVzDgytv6s-yF7ihyVHvtQhJciPpsM4OcDwzvTZ7G');

                // You can access MOBILE from credential.php
        // $numbers = array(MOBILE);
                // Access enter mobile number in input box
        $numbers = array($row2['phone']);

        $sender = 'TXTLCL';
        $otp = mt_rand(10000, 99999);
        $message = "Hello " . $_SESSION['u_tmp'] . " This is your OTP: " . $otp;

        try {
            //$result = $textlocal->sendSms($numbers, $message, $sender);
            setcookie('otp', $otp);
            
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        
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
        
                      <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="forgot3.php">
        
                         
                            <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                  <input class="input-field form-control" type="Email" placeholder="Enter Email" name="username" value="<?php echo $row['email'];?>" disabled>
                            </div>

                            <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                  <input class="input-field form-control" type="text" placeholder="Enter Email" name="username" value="<?php echo $row2['name'];?>" disabled>
                            </div>
                           
                          <div class="form-group">
                            <input name="sent_otp" id="sent_otp" class="btn btn-lg btn-primary btn-block" value="Sent OTP" type="submit" style="background-color: black">
                          </div>
                        </form>
        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div><?php
}
else
{
  header('location:forgot.php');
}
?>
<script>
  $(".sotp").click(function()
    {
    alert('OTP successfully sented..');
    });
</script>
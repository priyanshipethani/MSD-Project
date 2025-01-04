<?php include('header.php'); ?>
<style>
  .icon {
  padding: 10px;
  background: black;
  color: red;
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
		<div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form method="post" action="forgot2.php">
          
                      
                      <div class="input-container">
                          <i class="fa fa-envelope icon"></i>
                          <input class="input-field form-control" type="Email" placeholder="Enter Email" name="email">
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Next" type="submit" style="background-color: black">
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
    
<?php
  include('footer.php');
?>
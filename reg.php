
<!DOCTYPE html>
<html>

  
  <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend style="background-color:#003151;color:white;"><center><h2><b>Home Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Full Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user" style="color: #003151";></i></span> <input  name="fullname" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>


<!--E-mail-->
 <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope" style="color: #003151";></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- password-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-lock" style="color: #003151";></i></span>
  <input  name="password" placeholder="password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!--Select city-->
  <div class="form-group"> 
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-location-arrow" style="color: #003151";></i></span>
    <select name="city" class="form-control selectpicker">
      <option value="">Select your City</option>
      <option>Mahuva</option>
      <option>Bhavanagar</option>
      <option >Ahemdabad</option>
      <option >Rajkot</option>
      <option >Mumbai</option>
      <option >Surat</option>
      <option >Gandhinagar</option>
      <option >Vadodra</option>
      <option >Anand</option>
    </select>
  </div>
</div>
</div>
  <!--Pincode-->
  <div class="form-group">
  <label class="col-md-4 control-label">Pincode</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user" style="color: #003151";></i></span>
  <input  name="pincode" placeholder="Enter pincode" class="form-control"  type="text">
    </div>
  </div>
</div>
   <!-- mobile-->    
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-mobile" style="color: #003151 ";></i></span>
  <input name="phone" placeholder="(+91)" class="form-control" type="text">
    </div>
  </div>
</div>

<!--TYPE OF HOUSE-->
<div class="form-group"> 
  <label class="col-md-4 control-label">House</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-home" style="color: #003151";></i></span>
    <select name="home_type" class="form-control selectpicker">
      <option value="">Select type</option>
      <option>Apartment</option>
      <option>Tenement House</option>
      <option >Bungalow</option>
      <option>Farmhouse</option>
    </select>
  </div>
</div>
</div>

<!--Rooms-->
<div class="form-group"> 
  <label class="col-md-4 control-label">Available Rooms</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-bed" style="color: #003151";></i></span>
    <select name="rooms" class="form-control selectpicker">
      <option value="">Rooms</option>
      <option>1BHK</option>
      <option>2BHK</option>
      <option >3BHK</option>
      <option>4BHk</option>
    </select>
  </div>
</div>
</div>

<!--Address-->
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-address-book
  " style="color: #003151";></i></span>
  <textarea class="form-control" rows="2" id="Address" name="address"></textarea>
    </div>
  </div>
</div>

<!--Current Status-->
<div class="form-group"> 
  <label class="col-md-4 control-label">Status</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-info-circle" style="color: #003151";></i></span>
    <select name="status" class="form-control selectpicker">
      <option value="">Current Status</option>
      <option value="Vacent">Vacent</option>
      <option value="Occupied">Occupied</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Rent</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-inr" style="color: #003151";></i></span>
  <input  name="rent" placeholder="Enter Rent" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Image</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-picture-o" style="color: #003151";></i></span>
  <input type="file" name="image[]" placeholder="First Name" class="form-control" multiple="true">
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="row" style="padding-top: 10px;">
    <div class="col-md-4"></div>
  <div class="col-md-2">
    <input type="submit" class="btn btn-primary" name="submit1" style="width: 100%;" value="submit">
  </div>
    
   <div class="col-md-2">
    <button type="Cancle" class="btn btn-danger" style="width: 100%;">Cancel</button>
  </div>
</div>

</fieldset> 
</form>
</div>
</div>
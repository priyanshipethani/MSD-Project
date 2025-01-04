<?php 
include('config.php');
if(isset($_SESSION['user']))
{
  header('location:login.php');
}?>
<div id='book_data' style=""><?php
 $qry=mysqli_query($con,"select * from service_person2 where user_id='".$_POST['id']."'");
            $row=mysqli_fetch_array($qry);
            ?><input type="hidden" id="category" value="<?php   echo $row['category'] ?>">
      <select class="form-control" id="sp_ser" name="sp_type" style="margin-top: 10px;">
        <option value="0">Select Category</option>
        <?php 
           
            $ct=explode(",",$row['type']);
            foreach ($ct as $value) 
            {?>
              <option value="<?php echo $value;?>"><?php echo $value ?></option><?php
            }
            ?>
      </select>
      <span id="c" style="color:red;"></span>
      <div class="form-group" style="margin-top: 10px;">
        <input  name="date" data-date-format="YYYY-MM-DD" id="date" placeholder="Enter Name" class="form-control"  type="date"><span id="dt" style="color:red;"></span>
      </div>
      <div class="form-group" style="margin-top: 10px;">
        <select class="form-control" name="time" id="tm">
          <option value="">Select Time</option>
          <option value="7:00">7:00</option>
          <option value="9:00">9:00</option>
          <option value="11:00">11:00</option>
          <option value="3:00">3:00</option>
          <option value="5:00">5:00</option>
        </select>
        <span id="t" style="color:red;"></span>
        <span style="color: red;display: none" id="error">Not</span>
      </div>
      <div class="form-group" style="margin-top: 10px;">
        <input  name="name" id="name" placeholder="Enter Name" class="form-control"  type="text" id="name">
        <span id="nm" style="color:red;"></span>
      </div>
      <div class="form-group" style="margin-top: 10px;">
        <input  name="address" id="address" placeholder="Enter Address" class="form-control"  type="text">
        <span id="add" style="color:red;"></span>
      </div>
      <div class="form-group" style="margin-top: 10px;">
        <input  name="phone" id="phone" placeholder="Enter Phone" class="form-control"  type="text">
        <span id="ph" style="color:red;"></span>
      </div>
      <div class="form-group" style="margin-top: 10px;" align="center">
       <button id="s_btn" class="btn btn-primary;" onclick="return(validation())" style="background: black;color:white;width: 200px;border-radius: 15px">Booking</button>
      </div>
  </form>
</div>

<script>
function validation()
    {
        s_id=$("#s_Person").val();

        s_type=$("#sp_ser").val();
        date=$("#date").val();
        time=$("#tm").val();
        name=$("#name").val();
        address=$("#address").val();
        phone=$("#phone").val();
        ab=$("#category").val();
        var filter = /^[A-Za-z]+$/;
        var filter2 = /^[0-9]+$/;
        if(s_type=="0" && date=="" && time=="" && name=="" && address=="" && phone=="")
        {
          document.getElementById("c").innerHTML="Please Select Type";
          document.getElementById("dt").innerHTML="Please Select Date";
          document.getElementById("t").innerHTML="Please Select Time Slot";
          document.getElementById("nm").innerHTML="Please Enter Name";
          document.getElementById("add").innerHTML="Please Enter Address";
          document.getElementById("ph").innerHTML="Please Enter Mobile no";
          
          
        }
        else if (s_id=="0") 
        {
          alert("Please select SERVICE PERSON");
          return false;
        }
        else if (s_type=="0") 
        {
          document.getElementById("c").innerHTML="Please Select Type";
          return false;
        }
        else if (date=="") 
        {
          document.getElementById("dt").innerHTML="Please Select Date";
          return false;
        }
        else if (time=="") 
        {
          document.getElementById("t").innerHTML="Please Select Time Slot";
          return false;
        }
        else if (name=="") 
        {
          document.getElementById("nm").innerHTML="Please Enter Name";
          return false;
        }
        else if (!filter.test(name)) 
        {
          document.getElementById("nm").innerHTML="Please Enter valid name";
          return false;
        }
        else if (address=="") 
        {
          document.getElementById("add").innerHTML="Please Enter Address";
          return false;
        }
        else if (phone=="") 
        {
          document.getElementById("ph").innerHTML="Please Enter Mobile no";
          return false;
        }
        else if (!filter2.test(phone)) 
        {
          document.getElementById("ph").innerHTML="Please Enter only character";
          return false;
        }
        else
        {
          $.ajax({
          url:'process_booking.php',
          type:'POST',
          data:{"sp_id":s_id,"type":s_type,"name":name,"address":address,"phone":phone,"date":date,"time":time,"ab":ab},
          gatatype:'html'
        })
        .done(function(data)
        {
          alert(data);
          location.reload();
        })
        .fail(function()
        {
          alert("fail");
        });
        }
        
    }
  $("#tm").change(function()
    {
      a=$(this).val();
      b=<?php echo $_POST['id'];?>;
      dt=$("#date").val();

      $.ajax({
      url:'check_availiblity.php',
      type:'POST',
      data:{"ttm":a,"sp":b,"dt":dt},
      gatatype:'html'
    })
    .done(function(data)
    {
      alert(data);
    })
    .fail(function()
    {
      alert("fail");
    });
    });

   /*function validation()
  {
    var name = document.getElementById("name").value;
    var filter = /^[A-Za-z]+$/;
  
    if (!filter.test(name)) 
    {
      document.getElementById("nm").innerHTML=("Please enter only characters");
      document.getElementById("name").focus();
      return false;
    }
    else
    {
      document.getElementById("nm").innerHTML="";
    }
  
    var cat = document.getElementById("cat").value;
    var filter = /^["0"]+$/;
     if (!filter.test(cat))
    {
      document.getElementById("c").innerHTML=("Please enter only characters");
      document.getElementById("cat").focus();
      return false;
    }
    else
    {
      document.getElementById("nm").innerHTML="";
    }
  

    var phone = document.getElementById("phone").value;
    var filter = /^[0-9]+$/;
  
    if (!filter.test(phone)) 
    {
      document.getElementById("ph").innerHTML="Please Enter Only Digit";
      document.getElementById("phone").focus();
      return false;
    }
    else
    {
      document.getElementById("ph").innerHTML="";
    }

    var phone = document.getElementById("price").value;
    var filter = /^[0-9]+$/;
  
    if (!filter.test(phone)) 
    {
      document.getElementById("pr").innerHTML="Please Enter Only Digit";
      document.getElementById("price").focus();
      return false;
    }
    else
    {
      document.getElementById("pr").innerHTML="";
    }

    var image=document.getElementById("image").value;
    if(image.match(".jpg$")!=".jpg")
    {
        document.getElementById("img").innerHTML="Upload .PNG  file olny";
        document.getElementById("image").focus();
        return false;
    }
    else
    {

      document.getElementById("nm").innerHTML="";
    }

    var password = document.getElementById("password").value;
    var confi_password=document.getElementById("confi_password").value;

    if(password != confi_password)
    {
        document.getElementById("pass").innerHTML="password not match....";
        document.getElementById("confi_password").focus();
      return false;
    }
    else
    {
      return true;
    }

    var tm=document.getElementById("tm");
    if(tm.value=="")
    {
      alert("plase select time sloat");
      return false;

    }
    return true;
  }*/

</script> 
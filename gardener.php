<?php session_start();
if(!isset($_SESSION['user']))
{
 header('location:login.php');
} 
include('header.php'); 
include('config.php');?>
<script src="js/jquery.min.js"></script>
<script src="js/boostrap.min.js"></script>
<style>
.responsive {
  width: 100%;
  height: 60%;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 2px solid black;
  background-color: white;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:sky;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: black;
  color:red;
} 

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

</style>
<body>
<img src="img/service/gar1.jpg" alt="Nature" class="responsive" width="1500" height="200">
</body> 

<div class="tab" style="margin-top: 15px;">
  <button class="tablinks" onclick="openCity(event, 'London')" style="width: 180px">Category</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')" style="width: 180px">Proffesional</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"style="width: 183px">Review</button>
  <button class="tablinks" onclick="openCity(event, 'Booking')"style="width: 183px">Booking</button>

</div>

<div id="London" class="tabcontent">
  <div class="footer-links" style="margin-left: 40px"><br>
           <span style="background: #009900;border-radius: 20px;padding: 12px 110px;">Shed & fencing Repairs</span><br><br><br>
           <span style="background: #009900;border-radius: 20px;padding: 12px 95px;">Applying Feeds & Pesticide</span><br><br><br>
           <span style="background: #009900;border-radius: 20px;padding: 12px 135px;">Waste Removal</span><br><br>
        
  </div>
</div>

<div id="Paris" class="tabcontent">
  <div class=" footer-links" style="margin-left: 40px"><br>
      <?php
        $qry=mysqli_query($con,"select * from service_person2 where category='gardener'");
        while($row=mysqli_fetch_array($qry))
        { $qry2=mysqli_query($con,"select * from user_registration where id='".$row['user_id']."'");
          $row2=mysqli_fetch_array($qry2);?>
          <div class="row">
            <div class="col-md-1"><img style="width: 90px; height: 90px;border-radius: 120px;" class="img-circle" src="<?php echo $row['image']; ?>"></div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
              <h4 style="text-transform: uppercase;"><span style="font-weight: bold;color: blue"><?php echo $row2['name'];?></h4>
              <h6 style="text-transform: uppercase;"><span style="font-weight: bold;">Address :-</span><?php echo $row2['address'];?></h6>
              <h6 style="text-transform: uppercase;"><span style="font-weight: bold;">Phone :-</span><?php echo $row2['phone'];?></h6>
              <h6 style="text-transform: uppercase;"><span style="font-weight: bold;">Description :-</span><?php echo $row['description'];?></h6>
              <h6 style="text-transform: uppercase;"><span style="font-weight: bold;">Price :-</span><?php echo $row['price'];?></h6>
            </div>
          </div><br>
          <?php
          $qry12=mysqli_query($con,"select * from rating where sp_id='".$row['user_id']."'");
              while($row12=mysqli_fetch_array($qry12))
              { 
                $qry22=mysqli_query($con,"select * from user_registration where id='".$row12['user_id']."'");
                $row22=mysqli_fetch_array($qry22);
                ?>
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div align="center" class="col-md-2" style="background-color:white;border-radius: 20px;margin-top: 2px;"><img class="img-circle"  style="border-radius: 20px" src="<?php echo $row22['user_image'] ?>" alt="Sorry" width="50px" height="50px"></td>
                    <td><b><?php echo $row22['name'] ?></b></td><br>
                    <td><?php for($i=1;$i<=5;$i++)
                              {
                                if($i<=$row12['rating'])
                                {
                                  echo "<span class='fa fa-star' style='color:yellow'></span>";
                                }
                                else
                                {
                                  echo "<span class='fa fa-star'></span>";
                                }
                              }?></td><br>
                    <td><?php echo $row12['review'] ?></td><hr>
                    </div>
                  </div><?php         
              }
        }
      ?>
  </div>

</div>

<div id="Tokyo" class="tabcontent">
  <div class="row" style="margin-top: 15px">
     <div class="col-md-3"></div>
     <div class="col-md-4" align="center">
       <?php $qry1=mysqli_query($con,"select * from service_person2 where category='gardener'");
       ?>
       <select class="form-control" style="width: 100%; background-color: grey;color: black" id='sp_nm'>
         <option value="0">Select Person</option>
         <?php 
         while ($row1=mysqli_fetch_array($qry1)) 
         {$qry2=mysqli_query($con,"select * from user_registration where id='".$row1['user_id']."'");
            $row3=mysqli_fetch_array($qry2);?>
           <option value="<?php echo $row1['user_id']; ?>"><?php echo $row3['name']; ?></option><?php
         } ?>
       </select>
     </div>
   </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-2" align="center" style="margin-top: 30px;">
      <h3><b>Rating</b></h3></div>
    <div class="col-md-4"></div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-2" align="center">
      <span id="1" style="font-size:30px; cursor:pointer;"  class="fa fa-star" onmouseover="startRating(this)"></span>
                  <span id="2"  style="font-size:30px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)"></span>
                  <span id="3"  style="font-size:30px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)"></span>
                  <span id="4"  style="font-size:30px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)"></span>
                  <span id="5"  style="font-size:30px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)"></span>
        </div>
  </div><br><br>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4" align="center">
      <div class="form-group">
      <h3 style="color: #C70039"><b>Review</b></h3>
      <textarea id="review" class="form-control" style="resize: none;height: 100px;" clear></textarea>
    </div>
    <center><button class="btn btn-success" onclick="result()">SUBMIT</button></center></div>
    <div class="col-md-4"></div>
  </div>
</div>

<div id="Booking" class="tabcontent">
  <div class="footer-links" style="margin-left: 0px;margin-top: 10px;"><br>
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-4"></div>
      <div class="col-md-4" align="center" style="background-image: linear-gradient(to right,#0A2FA9,#3D5BC0,#607DDB);font-size: 25px;color:black;border-radius: 15px;border: 1px solid black" >Booking Appointment</div>
    </div>
    <div class="row" >
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-image: linear-gradient(to right,#0A2FA9,#3D5BC0,#607DDB);">
        <form action="process_booking.php" method="post">
          <select class="form-control" name="Person" id="s_Person" style="margin-top: 10px;">
            <option>Select Person</option>
            <?php 
                $qry=mysqli_query($con,"select * from service_person2 where category='gardener'");
                while($row=mysqli_fetch_array($qry))
                {$qry2=mysqli_query($con,"select * from user_registration where id='".$row['user_id']."'");
                  $row2=mysqli_fetch_array($qry2);  
                  ?>
                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['name'];?></option><?php
                }
               ?>
          </select>
        </div>
    </div>
    <div class="row" style="">
      <div class="col-md-4"></div>
      <div class="col-md-4" id="book_data" style="background-image: linear-gradient(to right,#0A2FA9,#3D5BC0,#607DDB);"></div>
      <div class="col-md-4"></div>
    </div>
        
  </div>
</div>

</div>
</form>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
function result()
{ a=$('#sp_nm').val();  
  
  r=$('#review').val()
  sp=$('#sp_nm').val()
  if(count!=0)
  {
    $.ajax({
      url:'rating.php',
      type:'POST',
      data:{"id":a,"rate":count,"revi":r,"sp":sp},
      gatatype:'html'
    })
    .done(function(data)
    {
      alert(data);
      location.reload();
    })
    .fail(function()
    {
      window.location="demo.<?php ?>";
      alert("fail");
    });
  }else
  {

  }
}

function startRating(item){
  count=item.id[0];
  sessionStorage.star = count;
  for(var i=0;i<5;i++){
    if(i<count){
      document.getElementById((i+1)).style.color="yellow";
    }
    else{
      document.getElementById((i+1)).style.color="black";
    }
  }
}
$("#s_Person").change(function()
  {$
    a=$(this).val();
    $.ajax({
      url:'get_book_data.php',
      type:'POST',
      data:{"id":a},
      gatatype:'html'
    })
    .done(function(data)
    {
    $("#book_data").html(data);
    })
    .fail(function()
    {
      window.location="demo.<?php ?>";
      alert("fail");
    });
  });


</script>
   
</body>
</html> <br>
<?php include('footer.php'); 
?>
 <?php include('header.php');
 include('config.php');
 if (!isset($_SESSION['user'])) 
 {
  header("location:login.php");    
} ?>
 <div class="card-body">
          <div style="min-height: 300px;">
            <?php $qry=mysqli_query($con,"select * from booking where user_id='".$_SESSION['user']."'");
            $c=mysqli_num_rows($qry);
            if($c>0)
            {?>

              <h2 style="text-align: center;border-radius: 20px;" class="glow"><b>My  Booking</b></h2>
              <table class="table table-hover table-bordered">
              <tr style="background-color: #C70039;font-weight: bold;">
                <td>Category</td>
                <td>type</td>
                <td>name</td>
                <td>address</td>
                <td>phone</td>
                <td>date</td>
                <td>time</td>
                <td>Staus</td>
              </tr><?php
              while($row=mysqli_fetch_array($qry))
              {?>
                  <tr>
                  <td><?php echo $row['category'] ?></td>
                  <td><?php echo $row['type'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['time'] ?></td>
                  <td style="font-weight: bold;"><a class="btn btn-primary" href="cancel_booking.php?id=<?php echo $row['id']; ?>">Cancel</a></td>
                   
                  </tr><?php
                           
              } 
            }
            else
            {
              echo "<center>NO PREVIOUS BOOKINGS</center>";
            }?>
            </table>
          </div>
<?php include('footer.php'); ?>
<style>
  .glow
  {
    font-size: 50px;
    color: #1344B0;
    -webkit-animation:glow 1s ease-in-out infinite alternate;
    -moz-animation:glow 1s ease-in-out infinite alternate;
    animation:glow 1s ease-in-out infinite alternate;

  }
  @-webkit-keyframes glow
  {
    1%
    {
      
      color: black ;
      text-shadow: 3px 3px #99B898;

    }
    25%
    {
      color: black;
      text-shadow: 3px 3px  #FECEAB;
    }

    50%
    {
      color: black ;
       text-shadow: 3px 3px #FF847C;
    }
    75%
    {
      color:  ;
       text-shadow: 3px 3px #E84A5f;
    }
    100%
    {
      color:black ;
       text-shadow: 3px 3px #2A363B;
    }
  }
</style>
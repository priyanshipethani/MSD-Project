<?php 
include('config.php');

$qry=mysqli_query($con,"select * from services where id='".$_GET['id']."'");
$row1=mysqli_fetch_array($qry);
echo $row1['service_list']; ?>
<div class="card-body">
            <table class="table table-hover table-bordered">
              <tr style="background-color: #C70039;font-weight: bold;">
                <td>Category</td>
                <td>type</td>
                <td>name</td>
                <td>address</td>
                <td>phone</td>
                <td>date</td>
                <td>time</td>
              </tr>
            <?php $qry=mysqli_query($con,"select * from booking where category='".$row1['service_list']."'");
              while($row=mysqli_fetch_array($qry))
              {
                ?>
                  <tr>
                  <td><?php echo $row['category'] ?></td>
                  <td><?php echo $row['type'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['time'] ?></td>
                   
                  </tr><?php
                           
              } ?>
            </table>
          </div>
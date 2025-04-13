<?php 
include('hm.php');
?>
  
<div class="box1">
<h2> ALL DETAILS</h2>
</div>
<table class="table table-hover table-bordered table-striped"border="2">
    <thead>
        <tr>
        <th>FID</th>
            <th>FNAME</th>
            <th>PHNO</th>
            <th>EMAILID</th>
            <th>FEES</th>
            <th>CNAME</th>
            <th>CARDNUM</th>
            <th>EXPMONTH</th>
            <th>EXPYEAR</th>
            <th>CVV</th>
            <th>TOTAL</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
    <?php
     
     $query = "select * from payments";
     $result = mysqli_query($con, $query);

    if(!$result){
        die("query failed");
    }
    else{
           while($row = mysqli_fetch_assoc($result))
           {
            ?>
            <tr>
            <td><?php  echo  $row['fid'];  ?></td>
            <td><?php  echo  $row['fname'];  ?></td>
            <td><?php  echo  $row['phno'];  ?></td>
            <td><?php echo $row['emailid'];  ?></td>
            <td><?php echo $row['fees'];  ?></td>
            <td><?php  echo $row['cname'];  ?></td>
            <td><?php  echo $row['cardnum'];  ?></td>
            <td><?php  echo $row['expmonth'];  ?></td>
            <td><?php  echo $row['expyear'];  ?></td>
            <td><?php  echo $row['cvv'];  ?></td>
            <td><?php  echo $row['total'];  ?></td>


             

            

            <td><a href="edit3.php?id=<?php echo $row['fid']; ?>" class="btn btn-success"> 
                Update</a></td>
            <td><a href="delete3.php?id=<?php echo $row['fid']; ?>" class="btn btn-danger"> 
            Delete</a></td>
            </tr>
                 
                 <?php
           }
    }
     ?>
     
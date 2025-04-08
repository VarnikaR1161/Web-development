<?php 
include('hm.php');
?>
  
<div class="box1">
<h2> ALL DETAILS</h2>
</div>
<table class="table table-hover table-bordered table-striped"border="2">
    <thead>
        <tr>
            <th>studentid</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>PHNO</th>
            <th>GENDER</th>
            <th>DOB</th>
            <th>ADDRESS</th>
            <th>CITY</th>
            <th>PINCODE</th>
            <th>STATE</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
  </thead>
    <tbody>

    </tbody>
    <?php
     
     $query = "select * from studentinfo";
     $result = mysqli_query($con, $query);

    if(!$result){
        die("query failed");
    }
    else{
           while($row = mysqli_fetch_assoc($result))
           {
            ?>
            <tr>
            <td><?php  echo  $row['studentid'];  ?></td>
            <td><?php  echo  $row['firstname'];  ?></td>
            <td><?php echo $row['lastname'];  ?></td>
            <td><?php echo $row['email'];  ?></td>
            <td><?php  echo $row['phno'];  ?></td>
            <td><?php  echo $row['gender'];  ?></td>
            <td><?php  echo $row['DOB'];  ?></td>
            <td><?php  echo $row['address'];  ?></td>
            <td><?php  echo $row['city'];  ?></td>
            <td><?php  echo $row['pincode'];  ?></td>
            <td><?php  echo $row['state'];  ?></td>


             

            

            <td><a href="edit1.php?id=<?php echo $row['studentid']; ?>" class="btn btn-success"> 
                Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['studentid']; ?>" class="btn btn-danger"> 
            Delete</a></td>
            </tr>
                 
                 <?php
           }
    }
     ?>
     
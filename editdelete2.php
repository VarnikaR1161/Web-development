<?php 
include('hm.php');
?>
  
<div class="box1">
<h2> ALL DETAILS</h2>
</div>
<table class="table table-hover table-bordered table-striped"border="2">
    <thead>
        <tr>
            <th>roomno</th>
            <th>floors</th>
            <th>occupunts</th>
            <th>status</th>
            <th>UPDATE</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>

    </tbody>
    <?php
     
     $query = "select * from roomtable";
     $result = mysqli_query($con, $query);

    if(!$result){
        die("query failed");
    }
    else{
           while($row = mysqli_fetch_assoc($result))
           {
            ?>
            <tr>
            <td><?php  echo  $row['roomno'];  ?></td>
            <td><?php  echo  $row['floors'];  ?></td>
            <td><?php echo $row['occupunts'];  ?></td>
            <td><?php echo $row['status'];  ?></td>
    
        <td><a href="edit2.php?id=<?php echo $row['roomno']; ?>" class="btn btn-success"> 
                Update</a></td>
            <td><a href="delete2.php?id=<?php echo $row['roomno']; ?>" class="btn btn-danger"> 
            Delete</a></td>
            </tr>
                 <?php
           }
    }
     ?>
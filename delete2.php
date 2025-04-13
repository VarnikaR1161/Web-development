<?php
require('hm.php');
$info="";


if(isset($_POST['submit'])){
    $roomno=$_POST['roomno'];
    $floors=$_POST['floors'];
    $occupants=$_POST['occupunts'];
    $status=$_POST['status'];

    

    $query="insert into roomtable (roomno,floors,occupunts,status) values
     ('$roomno','$floors','$occupunts','$date','$status') ";


    $query = "delete  from rooomtable where roomno=$roomno";
    $result = mysqli_query($con,$query);
    
    
    if($result)
{  
 $info="<span style='color:green;'>Deleted successfully </span>"; 
 echo $info;
}
else
{  
 $info ="<span style='color:red;'>Deletion failed</span>";  
}   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
    .container{
        display:flex;
        flex-direction: column;
        margin: auto;
        background: pink;
        border-radius: 10px;
       width: 200px;
       padding:20px;
    }
    

    </style>
</head>
<body>
    <h1><center>Registration Form</h1></center>
    <div class="container">
   <form action="" method="post" class="form">
    <label for="roomno">ROOM NO</label>
 <select name="roomno">
                        <option value="1">001</option>
                        <option value="2">002</option>
                        <option value="3">003</option>
                        <option value="4">004</option>
                        <option value="5">005</option>
                        <option value="6">006</option>
                        <option value="7">007</option>
                        <option value="8">008</option>
                        <option value="9">009</option>
                        <option value="10">101</option>
                        <option value="12">102</option>
                        <option value="13">103</option>
                        <option value="14">104</option>
                        <option value="15">105</option>
                        <option value="16">106</option>
</select>

    <label for="floors">NO.OF.FLOORS</label>
    <select name="floors">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                   </select>
    
    <p for="occupunts">NO.OF.OCCUPUNTS</p>
    FOOD<input type="radio" name="occupunts" id="FOOD">
     BED<input type="radio" name="occupunts" id="BED">
     FAN<input type="radio" name="occupunts"  id="FAN"/>
     CUPBOARD<input type="radio" name="occupunts"  id="CUPBOARD"/>
     A/C<input type="radio"  name="occupunts"  id="A/C"/>
    NON-A/C<input type="radio"   name="occupunts"  id="NON-A/C"/>
    RESTROOM<input type="radio" name="occupunts"  id="RESTROOM"/>
    WASHINGMACHINE<input type="WASHINGMACHINE" name="occupunts"  id="WASHINGMACHINE"/>
    
    <label for="status">STATUS</label>
    <select name="status">
    <input type="text" name="status" id="status">
     <label><input type="radio" name="act" value="one"/>available</label> 
     <label><input type="radio" name="act" value="two"/>no-available</label> 
      <label><input type="radio"name="act" value="three">empty</label>  
    <div>
    <input type="submit" value="Submit" name="submit">
     <input type="reset" value="Cancel">
    </div>
            <?php
                echo $info;
            ?>

    </form>
    </div>
</body>
</html>
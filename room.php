<?php

   require('hm.php');
   $info="";


   

if(isset($_POST['submit'])){

    $roomno=$_POST['roomno'];
    $floors=$_POST['floors'];
    $occupunts=$_POST['occupunts'];
    $date=$_POST['date'];
    $status=$_POST['status'];

  $query="insert into roomtable (roomno,floors,occupunts,date,status) values
   ('$roomno','$floors','$occupunts','$date','$status') ";

   $result = mysqli_query($con,$query);
if($result){
    $info = " <span  style=\"color:red;\"> Registered Successfully</span>";
     
}
   
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
    

<style>
    .container{
        display:flex;
        flex-direction: column;
        margin: auto;
        background:pink;
        border-radius: 10px;
       width: 200px;
       padding:20px;
    }
    .form{
        display:flex;
        flex-direction: column;
    }
</style>

</head>
<body>
<h1> <center>ROOM REGISTRATION</center> </h1>

    
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
    <div class="form-filed">
        <p>check-in-time</p>
        <input type="date">

    </div>               

    <p for="occupunts">NO.OF.OCCUPUNTS</p>
    <input type="text" name="occupunts" id="occupunts">
    <label><input type="checkbox" name="act" value="one"/>FOOD</label> 
     <label><input type="checkbox" name="act" value="two"/>BED</label> 
     <label><input type="checkbox" name="act" value="three"/>FAN</label> 
     <label><input type="checkbox" name="act" value="four"/>CUPBOARD</label>
     <label><input type="checkbox" name="act" value="five"/>A/C</label> 
     <label><input type="checkbox" name="act" value="six"/>NON-A/C</label>
     <label><input type="checkbox" name="act" value="seven"/>RESTROOM</label>
     <label><input type="checkbox" name="act" value="eight"/>WASHINGMACHINE</label> 
   
     <label for="status">STATUS</label>
     <input type="text" name="status" id="status">
     <label><input type="radio" name="act" value="one"/>available</label> 
     <label><input type="radio" name="act" value="two"/>no-available</label> 
      <label><input type="radio"name="act" value="three">empty</label>              
                    
    <div>
    <input type="submit" value="Submit" name="submit">
     <input type="Reset" value="Cancel">
     <a href="editdelete2.php">ROOMTABLE</a>
    </div>

    <?php
      echo $info;
    ?>

   
     
   </form>
   </div>


</body>
</html>
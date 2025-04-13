<?php
$info="";
require('hm.php');

if(isset($_GET['roomno'])){
    $id=$_GET['roomno'];
    $query = "select * from roomtable where roomtable=$roomtable";
    $result= mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

}

if(isset($_POST['update'])){

    $roomno=$_POST['roomno'];
    $floors=$_POST['floors'];
    $occupants=$_POST['occupunts'];
    $status=$_POST['status'];

    $query="update roomtable set roomno='$roomno',floors='$floors',occupunts='$occupunts',status='$status'";
    $result = mysqli_query($con, $query);

    if($result)
   {  
    $info="<span style='color:green;'>Updated successfully </span>"; 
    
   }
  else
 {  
    $info ="<span style='color:red;'>Updation failed</span>";  
   }   

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
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
    .form{
        display:flex;
        flex-direction: column;
    }
</style>

<script>
function validate(){
    document.getElementById("roomno").value=" <?php echo "{$row['roomno']}" ?>";
    document.getElementById("floors").value=" <?php echo "{$row['floors']}" ?>";
    document.getElementById("occupunts").value=" <?php echo "{$row['occupunts']}" ?>";
    document.getElementById("status").value=" <?php echo "{$row['status']}" ?>";

}

</script>

</head>
<body onload="validate()">
<style>
    .container{
        display:flex;
        flex-direction: column;
        margin: auto;
        background: pink;
        border-radius: 20px;
       width: 200px;
       padding:20px;
    }
    .form{
        display:flex;
        flex-direction: column;
    }
</style>



    <div class="container">
       <h1>Registration form</h1>

       <form action="#" method="post">

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
        <button type="submit" value="Register" name="update" id="regi"  >Update</button>
        <button type="reset" value="Cancel">Cancel</button>
        </div>
        
       </form>

<span> <?php echo $info; ?></span>
    </div>


</body>
</html>
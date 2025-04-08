<?php

   require('hm.php');
   $info="";


   

if(isset($_POST['submit'])){

    $studentid=$_POST['studentid'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $gender=$_POST['gender'];
    $DOB=$_POST['DOB'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];
    

  $sql="insert into studentinfo (studentid,firstname,lastname,email,phno,gender,DOB,address,city,pincode,state) values ('$studentid','$firstname','$lastname','$email',
  '$phno','$gender','$DOB','$address','$city','$pincode','$state') ";

  if($con->query($sql)=== TRUE){
    header("location:payments.php");
    exit();
   } else {
    echo "Error:".$sql."<br>".$con->error;
   }

}
$con->close();




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT REGESTRATION</title>

<style>
    .container{
        display:flex;
        flex-direction: column;
        margin: auto;
        background-color: whitesmoke;
        background:#997878;
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
<h1><center>STUDENT REGESTRATION </center></h1>
    
   <div class="container">
   <form action="" method="post" class="form">
   <label for="studentid">STUDENT ID</label>
    <input type="text" name="studentid" id="sduentid">

    <label for="firstname">FIRST Name</label>
    <input type="text" name="firstname" id="firstname">

    <label for="lastname">LAST Name</label>
    <input type="text" name="lastname" id="lastname">

    <label for="email">EMAIL ID</label>
    <input type="text" name="email" id="email">

    <label for="phno">PHONE NUMBER</label>
    <input type="text" name="phno" id="phonenumber">

    <label for="gender">GENDER</label>
    MALE<input type="radio" name="gender" value="M"/>
    FEMALE<input type="radio" name="gender" value="F"/>

    <label for="DOB">DATE OF BIRTH</label>
    <input type="date" name="DOB">

    <label for="address">ADDRESS</label>
    <input type="textarea" name="address" id="address">
    
    <label for="city">CITY</label>
    <input type="text" name="city" id="city">

    <label for="pincode">PINCODE</label>
    <input type="text" name="pincode" id="pincode">

    <label for="state">STATE</label>
    <input type="text" name="state" id="state">



<div>
    <input type="submit" value="Submit" name="submit">
     <input type="reset" value="reset">
    </div>

    <?php
      echo $info;
    ?>

   
     
   </form>
   </div>


</body>
</html>
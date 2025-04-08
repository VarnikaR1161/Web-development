<?php
$info="";
require('hm.php');

if(isset($_GET['studentid'])){
    $id=$_GET['studentid'];
    $query = "select * from studentinfo where studentid=$studentid";
    $result= mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

}

if(isset($_POST['update'])){

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

    $query="update studentinfo set firstname='$firstname',lastname='$lastname',email='$email',phno='$phno',gender='$gender',DOB='$DOB',
    address='$address',city='$city',pincode='$pincode',state='$state' where studentid='$studentid'";
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
        background-color:burlywood;
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

<script>
function validate(){
    document.getElementById("studentid").value=" <?php echo "{$row['studentid']}" ?>";
    document.getElementById("firstname").value=" <?php echo "{$row['firstname']}" ?>";
    document.getElementById("lastname").value=" <?php echo "{$row['lastname']}" ?>";
    document.getElementById("email").value=" <?php echo "{$row['email']}" ?>";
    document.getElementById("phno").value=" <?php echo "{$row['phno']}" ?>";
    document.getElementById("gender").value=" <?php echo "{$row['gender']}" ?>";
    document.getElementById("DOB").value=" <?php echo "{$row['DOB']}" ?>";
    document.getElementById("address").value=" <?php echo "{$row['address']}" ?>";
    document.getElementById("city").value=" <?php echo "{$row['city']}" ?>";
    document.getElementById("pincode").value=" <?php echo "{$row['pincode']}" ?>";
    document.getElementById("state").value=" <?php echo "{$row['state']}" ?>";

}

</script>

</head>
<body onload="validate()">


<h1><center>Registration form</center></h1>
    <div class="container">
       <form action="#" method="post">

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

    <label for="gender">GENDER</label><br>
    MALE<input type="radio" name="gender" value="M"/>
    FEMALE<input type="radio" name="gender" value="F"/><br>

    <label for="DOB">DATE OF BIRTH</label>
    <input type="date" name="DOB"><br>

    <label for="address">ADDRESS</label>
    <input type="textarea" name="address" id="address">
    

    <label for="city">CITY</label>
    <input type="text" name="city" id="city">

    <label for="pincode">PINCODE</label>
    <input type="text" name="pincode" id="pincode">

    <label for="state">STATE</label>
    <input type="text" name="state" id="state">


        <div>
        <button type="submit" value="Register" name="update" id="regi"  >Update</button>
        <button type="reset" value="Cancel">Cancel</button>
        </div>
        
       </form>

<span> <?php echo $info; ?></span>
    </div>


</body>
</html>
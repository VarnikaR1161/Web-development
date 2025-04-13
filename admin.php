<?php
   require('hm.php');
   $info="";


   

if(isset($_POST['submit'])){

    $adminid=$_POST['adminid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $pwd=$_POST['pwd'];

  $sql="insert into admin (adminid,name,email,phno,password) values ('$adminid','$name','$email','$phno','$pwd') ";

  if($con->query($sql)=== TRUE){
    header("location:home3.html");
    exit();
   } else {
    echo "Error:".$sql."<br>".$con->error;
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
        border-color: antiquewhite;
        background:linear-gradient(120deg,#2980b9,#8e44ad);
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
<h1> <center> ADMIN LOGIN</center> </h1>

    
   <div class="container">
   <form action="" method="post" class="form">
    <label for="adminid">ADMIN Id</label>
    <input type="text" name="adminid" id="adminid">

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="email">EMAIL ID</label>
    <input type="email" name="email" id="email">

    <label for="phno">PHONE NUMBER</label>
    <input type="text" name="phno" id="phonenumber">

    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd">

   
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
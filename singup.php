<?php

   require('hm.php');
   $info="";


if(isset($_POST['submit'])){

    $userid=$_POST['userid'];
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];

   $sql="insert into usertable (userid,username,password) values ('$userid','$username','$pwd') ";
   if($con->query($sql)=== TRUE){
    header("location:home2.html");
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
    <title>Register</title>
   

<style>
    .container{
        display:flex;
        flex-direction: column;
        margin: auto;
        background-color:whitesmoke;
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
<h1> <center> Register LOGIN</center> </h1>

   <div class="container">
   <form action="" method="post" class="form">
    <label for="userid">User Id</label>
    <input type="text" name="userid" id="userid" required>

    <label for="username">User Name</label>
    <input type="text" name="username" id="username" required>

    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd"required>
   
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
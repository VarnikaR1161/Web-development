<?php

   require('hm.php');
   $info="";


if(isset($_POST['submit'])){
    $fid=$_POST['fid'];
    $fname=$_POST['fname'];
    $emailid=$_POST['emailid'];
     $phno=$_POST['phno'];
     $fees=$_POST['fees'];
     $cname=$_POST['cname'];
     $cardnum=$_POST['cardnum'];
     $expmonth=$_POST['expmonth'];
     $expyear=$_POST['expyear'];
     $cvv=$_POST['cvv'];
     $total=$_POST['total'];



   $query="insert into payments (fid,fname,emailid,phno,fees,cname,cardnum,expmonth,expyear,cvv,total) values 
   ('$fid'$fname','$emailid','$phno','$fees','$cname','$cardnum','$expmonth','$expyear','$cvv','$total') ";

   $result = mysqli_query($con,$query);


}


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
        background:beige;
        border-radius: 20px;
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
<h1> <center>BILLS PAYEMENTS</center> </h1>

   <div class="container">
   <form action="" method="post" class="form">
   <label for="fid">FID</label>
    <input type="text" name="fid" id="fid">
 
   <label for="fname">FULL NAME</label>
    <input type="text" name="fname" id="fname">

    <label for="phno">PHONE NUMBER</label>
    <input type="text" name="phno" id="phno">

    <label for="emailid">EMAIL ID</label>
    <input type="text" name="emailid" id="emailid">

    <label for="fees">FEES DETAILS</label>
    <input type="text" name="fees" id="fees">
    <label><input type="radio" name="act" value="one"/>PARTIAL</label> 
    <select name="fees">
    <option value="37000">37000</option>
    </select>
     <label><input type="radio" name="act" value="two"/>OTHERS</label> 
     <input type="text" name="others" id="others">
     <label><input type="radio" name="act" value="three"/>FULL</label> 
     <select name="fees">
     <option value="74000">74000</option>
     </select>

    <label for="cname">NAME ON CARD</label>
    <input type="text" name="cname" id="cname">

    <label for="cardnum">CREDIT  NUMBER</label>
    <input type="text" name="cardnum" id="cardnum">
    
    <label for="expmonth">EXPMONTH</label>
    <input type="text" name="expmonth" id="expmonth">

    <label for="expyear">EXPYEAR</label>
    <input type="text" name="expyear" id="expyear">

    <label for="cvv">CVV</label>
    <input type="text" name="cvv" id="cvv">

    <label for="total">TOTAL</label>
    <input type="text" name="total" id="total">



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
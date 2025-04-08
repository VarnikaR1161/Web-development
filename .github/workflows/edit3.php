<?php
$info="";
require('hm.php');

if(isset($_GET['fname'])){
    $id=$_GET['fname'];
    $query = "select * from payments where fname=$fname";
    $result= mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

}

if(isset($_POST['update'])){
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
     ('$fid','$fname','$emailid','$phno','$fees','$cname','$cardnum','$expmonth','$expyear','$cvv','$total') ";
  

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
        background: beige;
        border-radius: 20px;
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
    document.getElementById("fid").value=" <?php echo "{$row['fid']}" ?>";
    document.getElementById("fname").value=" <?php echo "{$row['fname']}" ?>";
    document.getElementById("emailid").value=" <?php echo "{$row['emailid']}" ?>";
    document.getElementById("phno").value=" <?php echo "{$row['phno']}" ?>";
    document.getElementById("fees").value=" <?php echo "{$row['fees']}" ?>";
    document.getElementById("cname").value=" <?php echo "{$row['cname']}" ?>";
    document.getElementById("cardnum").value=" <?php echo "{$row['cardnum']}" ?>";
    document.getElementById("expmonth").value=" <?php echo "{$row['expmonth']}" ?>";
    document.getElementById("expyear").value=" <?php echo "{$row['expyear']}" ?>";
    document.getElementById("cvv").value=" <?php echo "{$row['cvv']}" ?>";
    document.getElementById("total").value=" <?php echo "{$row['total']}" ?>";
    

}

</script>
</head>
<body onload="validate()">



    
       <h1><center>BILLS PAYEMENTS</center></h1>
       <div class="container">
       <form action="#" method="post">

       <label for="fid">FID</label>
    <input type="text" name="fid" id="fid"><br>

       <label for="fname">FULL NAME</label>
 <input type="text" name="fname" id="fname"><br>

    <label for="phno">PHONE NUMBER</label>
    <input type="text" name="phno" id="phno">

    <label for="emailid">EMAIL ID</label>
    <input type="text" name="emailid" id="emailid">

    <label for="fees">FEES</label>
    <input type="text" name="fees" id="fees">

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
        <button type="submit" value="Register" name="update" id="regi"  >Update</button>
        <button type="reset" value="Cancel">Cancel</button>
        </div>
        
       </form>

<span> <?php echo $info; ?></span>
    </div>


</body>
</html>
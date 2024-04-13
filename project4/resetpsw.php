<?php

if(isset($_POST["resetbtn"]))
{
	$connect=mysqli_connect("localhost","root","","project4");

	$username= $_POST["username"];
	$contact= $_POST["contact"];

	$qry= "SELECT * FROM `user` WHERE username='$username' AND contact='$contact'" ;

	$result=mysqli_query($connect, $qry);
	$data= mysqli_fetch_assoc($result);

	$row=mysqli_num_rows($result);

	if($row>0)
	{
       $psw= randomPassword();
      
       $qry="UPDATE `user` SET `password`='$psw' WHERE username= '$username' AND contact='$contact' " ;
       $result=mysqli_query($connect, $qry);
      ?><script>alert("password reset succsessfully");</script><?php

	}
    else
    {
    	?><script>alert("Incorrect username OR password");</script><?php
    }
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}







?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Password Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
    .row {
      height: 100vh;
      align-items: center;
    }
   #frm{
       margin:50px;
    
    	background-color: black;
    
    }
    
  </style>
</head>
<body>

  <div class="container">
    <div class="row" id ="abc">
      <div class="col-md-6 mx-auto" id="frm">
        <h3 style="color: white;"> Reset Your Password </h3><br><br>
        <form method="post" >
          <input type="text" name="username" placeholder="Username" class="form-control"><br>

          <input type="mobile no" name="contact" placeholder="Mobile No" class="form-control"><br>
          <button type="submit" class="btn btn-primary" id="btnsubmit" name="resetbtn"> Reset</button><br>

          <p style="color: white"> Password- <b><?php if(isset($_POST["resetbtn"])) {echo $psw ; } ?></b>Kindly note your password</p>  
         
        </form>
      </div>
    </div>
  </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>








</body>
</html>
<?php

$connect= mysqli_connect("localhost", "root", "" ,"project3");

if(isset($_POST["register_button"]))
{
   $un = $_POST["username"]; 
   $pwd = $_POST["password"]; //no
   $cont = $_POST["contact"]; //no

      $qry="INSERT INTO `register`(`id`, `username`, `password`, `contact`) VALUES (  NULL,'$un','$pwd','$cont')";
      

        $result = mysqli_query($connect, $qry);

        if($result)
        {
          ?> <script> alert("Registration Successfull"); </script> <?php
        }
        else
        {
          ?> <script> alert("Something went wrong, try again later"); </script> <?php
        }
  
    }  
 ?>   


 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>
<link href="CSS\Style.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .row{
         height: 100vh;
         align-items: center;
    }
    .card{
      border-style: ;
    }

</style>

</head>
<body>
  <div class="container">
  
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header">

        <h3>Registration Form</h3>
        </div>
        <div class="card-body">
          <form method="post">

          <input type="text" name="username" placeholder="Username" class="form-control"><br>
      
          <input type="password" name="password" placeholder="Password" class="form-control"><br>
          <input type="Mobileno" name="contact" placeholder="Mobile Number" class="form-control"><br>
  
          <button type="submit" class="btn btn-success" id="btnsubmit" name="register_button"> Register </button><br>
          
        </form>
      </div>

</div>
</div>
</div>
</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>
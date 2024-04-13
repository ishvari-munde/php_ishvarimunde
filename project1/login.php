<?php
session_start();
if(isset($_SESSION["uid"]))
{
  header("location:user.php");
}


if(isset($_POST["login_button"]))
{
  
  include("connection.php");
  $eid = $_POST["email"];
  $pwd = $_POST["password"];

  if($eid=="admin" && $pwd=="admin")
  {
    header("location:admin.php");
  }
  
  $pwd= md5($_POST["password"]);

  $qry = "SELECT * FROM `register` WHERE email = '$eid' AND password = '$pwd'";



  $result = mysqli_query($connect, $qry); 

  $row = mysqli_num_rows($result);

  
    if($row>0)
     {
       $data= mysqli_fetch_assoc($result);
       session_start();
       $_SESSION["uid"]=$data["id"];

        header("location:user.php");
       
      } 
    else
     {
        ?><script>alert("No rows found");</script><?php 

     }

  
}
?>



<html>
<head>
  <title> Login Page </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
    .row{
      height: 100vh;
      align-items: center;
      background-color: #bbe2f0;
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-4 mx-auto">
        
       
        <form method="post">
           <h3> Login  </h3><br>
          <input type="text" name="email" placeholder="Email/Username" class="form-control"><br>
          <input type="password" name="password" placeholder="Password" class="form-control"><br>
          <button type="submit" class="btn btn-primary" id="btnsubmit" name="login_button"> Login </button>
          <p> Don't Have an Account? <a href="register.php"> Sign Up </a> </p> 

        </form>
      </div>
    
    </div>
  </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>








</body>
</html>
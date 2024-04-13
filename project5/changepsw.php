<?php


if(isset($_POST["changebtn"]))

{
  $connect=mysqli_connect("localhost", "root", "" ,"project5");

   $un= $_POST["username"];
   $cpsw=$_POST["cpsw"];

   $qry="SELECT * FROM `changepsw` WHERE  username='$un' AND password= '$cpsw'  ";
   $result = mysqli_query($connect, $qry);
   
   $data = mysqli_fetch_assoc($result);
   $id = $data["id"];
   $rows = mysqli_num_rows($result);

   
  if($rows>0) 
  {
    $id= $data["id"];


  if($rows>0)
  {
    $id= $data["id"];
    $npsw=$_POST["npsw"];
    $rpsw=$_POST["rpsw"];

    if($npsw==$rpsw)
    {
      $qry="UPDATE `changepsw` SET `password`='$npsw' WHERE id=$id ";
       $result=mysqli_query($connect,$qry); 

       if($result)
       {
        ?> <script>alert("password Change Successfully");</script><?php
       

        }
    }
    else
    {
        ?><script>alert("Passwords are not same");</script><?php
      
    
    }
  }
  else
  {
        ?><script>alert("Wrong current Password/username");</script><?php


    
  }


}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
       
       .card{
       	margin-top:30px;
      
       }
       h3{
        margin-top:20px;
      margin-left:20px;
      
       }
	
</style>
<body>
	<div classs="row">
  <div class="col-md-5 mx-auto">
  	<div class="card">
      <div class="card-header">
  	
  			<h3>Change Your Password</h3><br>
      </div>
  		
  		<div class="card-body">
    <form method="post">
      <input type="text" placeholder="username" name="username" class="form-control"><br>

       <input type="Password" placeholder="current password"name="cpsw" class="form-control"><br>
        <input type="Password" placeholder="new password"name="npsw" class="form-control"><br>
          <input type="Password" placeholder="re-enter password"name="rpsw" class="form-control"><br>
          <button class="btn btn-primary"type="submit"name="changebtn">Change Password</button>
  </form>
</div>

</div>
</div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>


<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:login.php");
}

include("connection.php");

$qry="SELECT * FROM `notice` order by id desc limit 5";
$result=mysqli_query($connect, $qry);
$row= mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User page</title>

	<link href="CSS\Style.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
  	.card{
  		margin-bottom: 50px;
  	}
.card-body ul{

	padding: 10;
	
}
.row{
	margin: 50px;

}
#abc{

	margin:50px;
}
h2{
    color:#c20c0c;
   
}
.btn a{
	color:white;
	text-decoration: none;

}

</style>
</head>
<body>



<div class="container"id="abc">
	<div class="row">
		<div class="col-md-12 ">
			<h2>Welcome User</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">




			<div class="card">
				<div class="card-header">
					<h5>Latest Announcement</h5>
				</div>
				<marquee direction="up">
				<div class="card-body">
					<ul>
						<?php if($row>0)
						     {
						     	while($data=mysqli_fetch_assoc($result))
						     	{
						     	   ?>
						     	    <li> <?php echo $data["notice"]; ?> </li>
						     	<?php }
						     }
						     	else
						     	{
						     		?>
						     		<li>No Notice Found</li>
						     	<?php }  ?>
						     	

					</ul>
				</div>
			</marquee>
			</div>
		<button class="btn btn-danger"><a href="logout.php">Logout</a></button>&nbsp;


		</div>

      
	</div>

	
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>




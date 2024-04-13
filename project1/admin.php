<?php
if(isset($_POST["noticebtn"]))
{
	include("connection.php");
	$note= $_POST["notice"];

	$qry = "INSERT INTO `notice` (`notice`) VALUES ('$note')" ;

    $result = mysqli_query($connect , $qry);
    if($result)
    {
    	    	?><script>alert("Notice Added Successfully");</script><?php

    }
    else
    {    	?><script>alert("Notice not added");</script><?php

    }
}

?>
<!DOCTYPE html>s
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin page</title>
   

   <link href="CSS\Style.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">




</head>

<style>
    
    
    #button{

    	margin: 20px;
    }
    h2{
       margin-bottom: 50px;
        
   
    }
    .row{
         height: 100vh;
         align-items: center;
    	background-color: #fff9c9;
    }




</style>

<body>
  <div class="abc">   
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 mx-auto">
				 <marquee><h2>Welcome Admin</h2></marquee>
				<form method="post">
					<div class="form-group">
						<label><b>ADD NOTICE<b></label><br><br>
						<textarea name="notice"cols="5"rows="5" placeholder ="Enter Notice Here..."class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-warning" name="noticebtn" id="button">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
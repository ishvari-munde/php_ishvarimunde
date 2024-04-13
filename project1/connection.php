<?php


$connect = mysqli_connect("localhost","root", "" , "project1") ;


if($connect)
{
	echo"connected" ;
}
else
{
	echo"not connected" ;
}
?>
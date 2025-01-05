<?php
include "dbconnect.php";
$id=$_GET["id"];
$query="delete from test where testid=$id";
$result=mysqli_query($con,$query);
if($result) 
  header("location:mypage.php");

   
?>
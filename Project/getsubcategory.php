<?php
require "dbconnect.php";
$id=$_GET["id"];
$query="select * from subcategory where cat_id=$id";
   $result=mysqli_query($con,$query);
   echo "<option>-select-</option>";
   while($row=mysqli_fetch_array($result)){
    echo "<option value=$row[0]>$row[1]</option>";
   }


<?php
require "header.php";
?>
<form action="#" method="POST">
<label for="catname">Category name</label>
<input type="text" name="catname" id="catname" placeholder="Enter your category">
<input type="submit" name="submit" value="Submit">
</form>

<?php
require "dbconnect.php";
// $obj= new db;

if(isset($_POST["submit"]))
{
$cat_name=$_POST["catname"];
$query="insert into category(cat_name) values('$cat_name')";

$result=mysqli_query($con,$query);
echo("successfull inserted");

}
?>
<?php
require "footer.php";
?>
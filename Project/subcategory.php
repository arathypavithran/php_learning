<form action="#" method="POST">
<label for="subname">Subcategory name</label>
<input type="text" name="subname" id="subname" placeholder="Enter your subcategory name"><br><br>
<label for="subcatid">category</label>
<select name="cat_id" id="cat_id">
<option value="cat_id"> -Select-   </option>
<?php
   require "dbconnect.php";
   $query="select * from category";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result)){
    echo "<option value=$row[0]>$row[1]</option>";
   }
    ?>
</select><br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
require "dbconnect.php";
// $obj= new db;

if(isset($_POST["submit"]))
{
$subcat_name=$_POST["subname"];
$cat_id=$_POST["cat_id"];

$query="insert into subcategory(subcat_name,cat_id) values('$subcat_name','$cat_id')";

$result=mysqli_query($con,$query);
echo("successfull inserted");

}
?>
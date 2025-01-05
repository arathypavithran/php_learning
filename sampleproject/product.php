<html>
    <head>
    <link rel="stylesheet" href="./style.css">
    <script>
function showsubcategory(str) {
    //alert(str);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("subcat_id").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getsubcategory.php?id="+str,true);
        xmlhttp.send();
    }
}
</script>

</head>

<div class="add-button">
           
            <a href="index.php" style="text-decoration: none;">
                <button class="add-product">Back to Dashboard</button>
            </a>
</div><br><br>


<form action="#" method="POST" enctype="multipart/form-data">
<label for="proname">Product name</label>
<input type="text" name="proname" id="proname" placeholder="Enter your product name"><br><br>
<label for="rate">Product rate</label>
<input type="text" name="rate" id="rate" placeholder="Enter your product rate"><br><br>
<label for="catid">category</label>
<select name="cat_id" id="cat_id" onchange=showsubcategory(this.value)>

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
<label for="subcatid">Subcategory id</label>
<select name="subcat_id" id="subcat_id" ></br>
<option value="subcat_id"> -Select-   </option>

<?php
require "dbconnect.php";
$query="select * from subcategory";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo "<option value=$row[0]>$row[1]</option>";
   }
?>
</select><br><br>
<label for="image">Product Image</label>
<input type="file" name="proimage" id="proimage"><br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
require "dbconnect.php";
// $obj= new db;

if(isset($_POST["submit"]))
{
$product_name=$_POST["proname"];
$product_rate=$_POST["rate"];
$category_id=$_POST["cat_id"];
$subcategory_id=$_POST["subcat_id"];
$image=$_FILES["proimage"]["name"];

// file uplaod

$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["proimage"]["name"]);

if (move_uploaded_file($_FILES["proimage"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["proimage"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}



// file upload end


$query="insert into product(product_name,subcat_id,product_rate,cat_id,product_image) values('$product_name','$subcategory_id','$product_rate','$category_id','$image')";
echo $query;
$result=mysqli_query($con,$query);
echo("successfull inserted");

}
?>



<?php
include "dbconnect.php";
$id=$_GET["id"];
$query="select * from test where testid=$id";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
   

?>
<form action="#" method="POST">
<input type="hidden" name="testid" value="<?php echo $row[0]?>" >
<input type="text" name="fname" value="<?php echo $row[1]?>"  placeholder="name">
<input type="text" name="amount" value="<?php echo $row[2] ?>" placeholder="amount">
<input type="submit" value="Update" name="update">
    
</form>

<?php
}
if(isset($_POST["update"])){
    $id=$_POST["testid"];
    $name= $_POST["fname"];
    $amount= $_POST["amount"];

    $query="update test set name='$name' , amount='$amount' where testid='$id'";
    $result=mysqli_query($con,$query);
    if($result) 
    header("location:mypage.php");

  
    
}



?>
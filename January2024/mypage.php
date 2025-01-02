
<form action="#" method="post">

<input type="text" name="txtsearch" id="txtsearch">
<input type="submit" name="search" id="search" value="Search">
</form>
<form action="#" method="POST">
    <input type="text" name="fname"  placeholder="name">
    <input type="text" name="amount" placeholder="amount">
    <input type="submit" value="Insert" name="insert">
    <input type="submit" value="Display" name="display">
</form>
<?php
include "dbconnect.php";

if(isset($_POST["insert"]))
{
$name=$_POST["fname"];
$amount=$_POST["amount"];
$query="insert into test(name,amount) values('$name',$amount)";
$result=mysqli_query($con,$query);
if($result)
   echo("successfull inserted");
}
if(isset($_POST["display"]))
{
   $query="select * from test";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result)){
        for($i=0;$i<3;$i++)
            echo $row[$i]." "; 
        echo "<a href='delete.php?id=$row[0]'>Delete</a>";
        echo " ";
        echo "<a href='edit.php?id=$row[0]'>Edit</a><br>";

   }
   
}
if(isset($_POST["search"])){
   $id=$_POST["txtsearch"] ;
   $query="select * from test where testid=$id";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result)){
    echo $row[1] . $row[2] ;
   }


}
?>
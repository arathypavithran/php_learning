<?php
echo "<h1>hello</h1>";
print "<h1>hhhhh</h1>";
$a=10;
$b=20;
$c=$a+$b;
echo $c;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="fname" id="fname">
        <input type="text" name="lname" id="lname">
        <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>
<?php
if(isset($_GET["submit"])){
    $fname=$_GET["fname"];
    $lname=$_GET["lname"];
    echo $fname." ".$lname;
}

?>
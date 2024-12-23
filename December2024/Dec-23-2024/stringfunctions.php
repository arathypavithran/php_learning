<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str="Hello world !";
    echo $str . "<br>";
    echo chop($str,"World!");
    ?> 
    <?php 
    $str1="Hello world";
    echo  $str1 ."<br>";
    echo chunk_split($str,"1");
    ?>
</br>
    <!-- Functions -->
     <h3>Functions</h3>
     <?php
     function sum(){
        echo "Sum =" . " " . 10+15;
     }
     sum();
     ?>
     <h4>Function with parameters</h4>
     <?php 
     function sum1($var1,$var2){
        $sum = $var1 + $var2;
        echo "sum of" . " " . $var1 . " " . "and" . " " .  $var2 ." " ."is" ." ". $sum;
     }
     sum1(10,25);
     ?>
     <h4>default arguments</h4>
     <?php 
     function sum2($v1=10,$v2=20,$v3=30){
        $sum1 = $v1 + $v2 + $v3;
        echo "sum of" . " " . $v1 . " " . " , " . " $v2" . " " . "and" . " " .  $v3 ." " ."is" ." ". $sum1 . "</br>";
     }
     sum2(20,30,30);
     sum2(20);
     ?> 
<h3>Returning values from a function</h3>
    <?php
    function sum3($va1,$va2){
        $sum = $va1 + $va2;
        return $sum;
    }
    $result = sum3(20,30);
    echo "sum =" . " " .$result;
    
    ?>

    <h3>$GLOBALS</h3>

    <?php 
    $x = 30;
    $y = 40;
    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
       
    }
    addition();
    echo $z;
    ?>

    <h3>PHP $_SERVER</h3>
    <?php 
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['HTTP_HOST'] . "<br>";
    echo $_SERVER['HTTP_REFERER'] . "<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
    echo $_SERVER['SCRIPT_NAME'] . "<br>";
    ?>

<h3>REQUEST</h3>
<form method="post" action="#">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<h3>PHP $_REQUEST</h3>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_REQUEST["fname"];
    if(empty(isset($name))){
        echo "Name is empty";
    }else{
        echo $name;
    }
}
?>
 <h3>PHP $_POST</h3>
<form method="post" action="#">
  Name: <input type="text" name="frstname">
  <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $name1 = $_POST["frstname"];
    if(empty(isset($name1))){
        echo "Name is empty";
    }else{
        echo $name1;
    }
}
?>

<h3>$_GET</h3>
<a href="test_get.php?subject=PHP&web=websiteaddress">Test $GET</a>





</body>
</html>
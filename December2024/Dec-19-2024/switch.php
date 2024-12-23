<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Switch statement -->
    <?php
    $d = date("D");
    //echo $d;
    Switch($d){
        case "Sun" : echo "Sunday";
        break;
        case "Mon" : echo "Monday";
        break;
        case "Tue": echo "Tuesday";
        break;
        case "Wed" : echo "Wednesday";
        break;
        case "Thu" :echo "Thursday";
        break;
        case "Fri": echo "Friday";
        break;
        case "Sat": echo "Saturday";
        break;
        default : echo "Invalid day";
        break;

    }
    ?>

    <!-- For loop -->
</br>
<h5>numbers 1 to 10</h5>
    <?php 
    for($i=1;$i<=10;$i++){
        echo $i ."<br>";
    }
    ?>

    <h5>While Loop</h5>
    <?php
    $i=1;
    while($i<=5){
       
            echo $i ." ";
            $i++;
            
        }
     
    ?>

    <!-- Do while -->
     <h5>Do While</h5>
     <?php
     $i=1;
     do{
        echo $i ." ";
        $i++;
     }
     while($i<=5)
     ?>
<!-- foreach -->
 <h5>Foreach</h5>
 <?php 
 $arr=[1,2,3,4,5,6,7,8,9];
 foreach($arr as $val){
    echo $val . " ";
 }
 ?>
 <!-- break statement -->
  <h5>Break statement</h5>
  <?php 
  $i=0;
  while($i<=10){
 if($i==4)break;
    $i++;
  }
  echo  "The loop breaked at " ." ".  $i ;
  ?>
  
<!-- Continue statement -->
 <h5>Continue statement</h5>
 <?php 
 $arr = [1,2,3,4,5,6,7,8,9];
 foreach($arr as $val){
    if($val==3) continue;
    echo "the value is".$val." </br>";

 }
 ?>
 <!-- Arrays -->
  <h5>Numeric Array</h5>
  <?php
  $arr[0] ="one";
  $arr[1] ="two";
  $arr[2]="three";
  $arr[3]="four";
  $arr[4]="five";
  foreach($arr as $val){
    echo "the value is". " ". $val;
  }
  ?>
  <h5>Associative array</h5>
  <?php
  $sal =array("abc" => 20000,"def"=>3453,"ghi"=>76543);
  echo $sal['abc'];  ?>

<h5>Multidimensional Array</h5>
<?php
$marks = array("abcd"=>array("maths"=>50,"English"=>57),"edf"=>array("maths"=>45,"English"=>56));
echo $marks['abcd']['maths'];
 ?> 

 <!-- finding repeating values in an array -->
<h5> finding repeating values in an array</h5>

<?php
$array = [1, 2, 3, 3, 4, 5];

$repvalueCounts = [];

foreach ($array as $repvalue) {
    if (isset($repvalueCounts[$repvalue])) {
        $repvalueCounts[$repvalue]++;
    } else {
        $repvalueCounts[$repvalue] = 1;
    }
}


foreach ($repvalueCounts as $repvalue => $count) {
    echo  "The number " ."$repvalue = $count\n" ."times" . "</br> ";
}
?>

</body>
</html>
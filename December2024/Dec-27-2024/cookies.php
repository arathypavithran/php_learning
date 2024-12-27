<?php
setcookie("name","test",time()+3600,"/","",0);
setcookie("age","30",time()+3600,"/", "",0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set cookies with PHP</title>
</head>
<body>
<?php 
   echo "Set cookies";
    echo "</br>";
    echo $_COOKIE["name"];
    echo "</br>";
    echo $_COOKIE["age"];
    echo "</br>";

    ?>
</body>
</html>
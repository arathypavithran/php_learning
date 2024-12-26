<?php 
session_start();
if (isset($_SESSION['counter'])){
    $_SESSION['counter'] += 1;
}
else{
    $_SESSION['counter']= 1;

}
$msg ="You have visited this page" . $_SESSION['counter'] . "in this section";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo ($msg);
    //unset($_SESSION['counter']);
    //session_destroy();
    ?>
</body>
</html>
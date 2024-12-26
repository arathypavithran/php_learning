<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="username" id="username" placeholder="Enter username">
        <input type="email" name="email" id="email" placeholder="Enter email">
        <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    header("Location: welcome.php");
    exit();
}
?>

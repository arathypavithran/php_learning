<?php

session_start();

require_once('functions.php');

if (!isset($_SESSION['username']) && !(isset($_COOKIE['username']) && isset($_COOKIE['password']))) {
   
    header("Location: login.html");
    exit();
}


if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && !isset($_SESSION['username'])) {
   
    $_SESSION['username'] = $_COOKIE['username'];
}

echo "Welcome, " . $_SESSION['username'] . "!";
echo "<br><a href='logout.php'>Logout</a>";
?>

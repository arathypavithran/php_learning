<?php

session_start();

// Include the functions file
require_once('functions.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    if (login($username, $password)) {
       
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>

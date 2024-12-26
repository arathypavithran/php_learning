<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "Hello, " . htmlspecialchars($_SESSION['username']) . "!";
    echo "</br>";
    echo "Mail id:" . htmlspecialchars($_SESSION['email']);
} 

?>

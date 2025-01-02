<?php

$valid_username = "user";
$valid_password = "password";

function login($username, $password) {
    global $valid_username, $valid_password;


    if ($username === $valid_username && $password === $valid_password) {
        
        $_SESSION['username'] = $username;

        
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (30 * 24 * 60 * 60), "/"); // 30 days
            setcookie('password', $password, time() + (30 * 24 * 60 * 60), "/"); // 30 days
        }

        return true; 
    }

    return false; 
}


function logout() {
   
    session_unset();
    session_destroy();

   
    setcookie('username', '', time() - 3600, "/");
    setcookie('password', '', time() - 3600, "/");
}
?>

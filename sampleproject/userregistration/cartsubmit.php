<?php
require "../dbconnect.php";
session_start();
$user_id= $_SESSION['user_id'];


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
    
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : null;
   

    // Validate required fields
   
        // Insert order into database
        $query = "INSERT INTO `cart` (user_id,product_id, quantity)
                  VALUES ('$user_id','$product_id', '$quantity')";

        if (mysqli_query($con, $query)) {
            echo "Product added Cart  successfully!";
        } 
    
    }

?>

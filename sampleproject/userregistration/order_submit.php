<?php
require "../dbconnect.php";
session_start();
$user_id= $_SESSION['user_id'];


// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : null;
    $product_rate = isset($_POST['product_rate']) ? $_POST['product_rate'] : null;
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : null;
    $fname = isset($_POST['fname']) ? $_POST['fname'] : null;
    $lname = isset($_POST['lname']) ? $_POST['lname'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;

    // Validate required fields
    if ($product_id && $product_name && $product_rate && $quantity && $fname && $lname && $address) {
        // Insert order into database
        $query = "INSERT INTO `order` (user_id,product_id, product_name, product_rate, quantity, fname, lname, address)
                  VALUES ('$user_id','$product_id', '$product_name', '$product_rate', '$quantity', '$fname', '$lname', '$address')";

        if (mysqli_query($con, $query)) {
            echo "Order placed successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>

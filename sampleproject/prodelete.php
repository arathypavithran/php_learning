<?php
require "dbconnect.php";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Delete query
    $delete_query = "DELETE FROM product WHERE product_id = $product_id";

    if (mysqli_query($con, $delete_query)) {
        header("Location:index.php"); // Redirect to dashboard
    } else {
        echo "Error deleting product: " . mysqli_error($con);
    }
} else {
    echo "Invalid request!";
}
?>

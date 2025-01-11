<?php
require "../dbconnect.php";
session_start();
$user_id= $_SESSION['user_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
</head>
<body>
    <h1>Place Your Order</h1>
    <?php 
    $product_id=$_GET["product_id"];
    $qty=$_GET["quantity"];
    $product ="select * from product LEFT JOIN category ON product.cat_id = category.cat_id 
              LEFT JOIN subcategory ON product.subcat_id = subcategory.subcat_id  where $product_id = product.product_id";

   $result = mysqli_query($con, $product);
   $product = mysqli_fetch_assoc($result);

// Fetch user details (Assume user_id is available, e.g., from session)
$user_id= $_SESSION['user_id'];
$user_query = "SELECT * FROM users WHERE user_id = $user_id";
$user_result = mysqli_query($con, $user_query);
$user = mysqli_fetch_assoc($user_result);
// '<pre/>';
// print_r($user); 
// exit;
    
    // echo $product;
     if (isset($product)): ?>
        <form action="order_submit.php" method="POST">
            <p><strong>Product Name:</strong> <?php echo htmlspecialchars($product['product_name']); ?></p>
            
            <p><strong>Product Rate:</strong> <?php echo htmlspecialchars($product['product_rate']); ?></p>
            <p><strong>Category:</strong> <?php echo htmlspecialchars($product['cat_name']); ?></p>
            <p><strong>Subcategory:</strong> <?php echo htmlspecialchars($product['subcat_name']); ?></p>
            <p><strong>Quantity:</strong> <?php echo htmlspecialchars($qty); ?></p>
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>">
            <input type="hidden" name="product_rate" value="<?php echo htmlspecialchars($product['product_rate']); ?>">
            <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($qty); ?>">

            <h3>Enter Your Details</h3>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="<?php echo htmlspecialchars($user['fname'] ?? ''); ?>" required><br><br>
            
            <!-- <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" required><br><br> -->
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value="<?php echo htmlspecialchars($user['lname'] ?? '');?> " required><br><br>
            <label for="address">Address:</label>
            <textarea name="address" id="address"  required><?php echo htmlspecialchars($user['address'] ?? ''); ?></textarea><br><br>
            <input type="checkbox" id="cod" name="cod" value="COD" required>
            <label for="cod"> Cash on Delivery </label><br><br><br>
            <button type="submit">Place Order</button>
        </form>
    <?php else: ?>
        <p>Product details not available.</p>
        <?php endif; ?>
</body>
</html>

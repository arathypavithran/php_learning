<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
<?php
require "../dbconnect.php";  

$query = "SELECT cart.*, product.product_name ,product.product_rate 
FROM `cart`
JOIN `product` ON cart.product_id = product.product_id;
";


// $query = "SELECT * FROM `cart`";
$result = mysqli_query($con, $query);  
$index = 1; // Initialize the index counter
?>
<h1>Orders</h1>
<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>#</th> <!-- Index Column -->
            <th>Order ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Rate</th> 
            <th>Quantity</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cart = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $index++; ?></td> <!-- Display Index and Increment -->
                <td><?php echo $cart['id']; ?></td>
                <td><?php echo $cart['user_id']; ?></td>
                <td><?php echo $cart['product_id']; ?></td>
                 <td><?php echo $cart['product_name']; ?></td>
                 <td><?php echo $cart['product_rate']; ?></td>  
                <td><?php echo $cart['quantity']; ?></td>
                <td><?php echo $cart['added_at']; ?></td>
                <td>
                            <!-- View Button -->
                            <a href="userprofile.php" style="text-decoration: none; margin-right: 10px;">
                                <button style="background-color: blue; color: white;">Buy Now</button>
                            </a>

                        </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>

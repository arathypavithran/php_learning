<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
<?php
require "dbconnect.php";  

$query = "SELECT * FROM `order`";
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Order Date</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($order = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $index++; ?></td> <!-- Display Index and Increment -->
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['user_id']; ?></td>
                <td><?php echo $order['product_id']; ?></td>
                <td><?php echo $order['product_name']; ?></td>
                <td><?php echo $order['product_rate']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
                <td><?php echo $order['fname']; ?></td>
                <td><?php echo $order['lname']; ?></td>
                <td><?php echo $order['address']; ?></td>
                <td><?php echo $order['order_date']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>

<?php
require "dbconnect.php";

// Fetch data from the `product` table and join with the `category` and `subcategory` tables
$query = "SELECT product.*, category.cat_name, subcategory.subcat_name FROM product LEFT JOIN category ON product.cat_id = category.cat_id LEFT JOIN subcategory ON product.subcat_id = subcategory.subcat_id";

$result = mysqli_query($con, $query);

// Check if query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

$index = 1; // Initialize the index counter
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Product Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <h1>Product Dashboard</h1>
        <!-- Add Product Button -->
         <div style="margin-left: 139px;">
         <div class="add-button">
            <a href="product.php" style="text-decoration: none;">
                <button class="add-product">Add Product</button>
            </a>
            
            <a href="category.php" style="text-decoration: none;">
                <button class="add-product">Add Category</button>
            </a>
            <a href="subcategory.php" style="text-decoration: none;">
                <button class="add-product">Add Subcategory</button>
            </a>

            <a href="orderdetails.php" style="text-decoration: none;">
                <button class="add-product">Orders</button>
            </a>
            
        </div><br><br>
</div>

        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>#</th> <!-- Index Column -->
                    <th>Product Name</th>
                    <th>Product Rate</th>
                    <th>Category Name</th>
                    <th>Subcategory Name</th>
                    <th>Product Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($product = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $index++ ?></td> <!-- Display Index and Increment -->
                        <td><?php echo $product['product_name'] ?></td>
                        <td><?php echo $product['product_rate'] ?></td>
                        <td><?php echo $product['cat_name'] ?></td> <!-- Display Category Name -->
                        <td><?php echo $product['subcat_name'] ?></td> <!-- Display Subcategory Name -->
                        <td>
                            <img src="uploads/<?php echo $product['product_image'] ?>" 
                                 alt="<?php echo $product['product_name'] ?>" 
                                 style="max-width: 100px; height: auto;" />
                        </td>
                        <td>
                            <!-- View Button -->
                            <a href="proview.php?id=<?php echo $product['product_id'] ?>" style="text-decoration: none; margin-right: 10px;">
                                <button style="background-color: blue; color: white;">View</button>
                            </a>

                            <!-- Edit Button -->
                            <a href="proedit.php?id=<?php echo $product['product_id'] ?>" style="text-decoration: none; margin-right: 10px;">
                                <button>Edit</button>
                            </a>

                            <!-- Delete Button -->
                            <a href="prodelete.php?id=<?php echo $product['product_id'] ?>" style="text-decoration: none;">
                                <button style="background-color: red; color: white;">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

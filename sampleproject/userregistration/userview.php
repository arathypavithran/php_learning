<?php
require "../dbconnect.php";

// Get the product ID from the GET request
$product_id = isset($_GET['id']) ? $_GET['id'] : null;

// // Get the quantity array from the GET request
$qtyArray = isset($_GET['qty']) ? $_GET['qty'] : [];

// // Fetch the selected quantity for the current product
$qty = isset($qtyArray[$product_id]) ? $qtyArray[$product_id] : 'Not specified';

if ($product_id) {
    // Fetch the product details
    $query = "SELECT product.*, category.cat_name, subcategory.subcat_name 
              FROM product 
              LEFT JOIN category ON product.cat_id = category.cat_id 
              LEFT JOIN subcategory ON product.subcat_id = subcategory.subcat_id 
              WHERE product.product_id = $product_id";

    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        die("Product not found!");
    }
} else {
    die("Product ID not provided!");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
</head>
<body>
    <h1>View Product</h1>
    
    
    <form action="userprofile.php" method="GET">
        <?php if (isset($product)): ?>
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']?>">
        <input type="hidden" name="quantity" value="<?php echo ($qty); ?>">
        <p><strong>Product Name:</strong> <?php echo htmlspecialchars($product['product_name']); ?></p>
        <p><strong>Product Rate:</strong> <?php echo htmlspecialchars($product['product_rate']); ?></p>
        <p><strong>Category:</strong> <?php echo htmlspecialchars($product['cat_name']); ?></p>
        <p><strong>Subcategory:</strong> <?php echo htmlspecialchars($product['subcat_name']); ?></p>
        <p><strong>Quantity:</strong> <?php echo htmlspecialchars($qty); ?></p>
        <img src="../uploads/<?php echo htmlspecialchars($product['product_image']); ?>" 
             alt="<?php echo htmlspecialchars($product['product_name']); ?>" 
             style="max-width: 200px; height: auto;">
        <br>
        <a href="userdashboard.php">Back to Dashboard</a>
       
        
        <button type="submit" name="id">Buy Now...</button>
        
        </a>
    <?php else: ?>
        <p>Product details not available.</p>
    <?php endif; ?>

    </form>


    <form action="add_to_cart.php" method="GET">
        <?php if (isset($product)): ?>
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']?>">
        <input type="hidden" name="quantity" value="<?php echo ($qty); ?>">
        
        
        <button type="submit" name="id">Add to cart</button>
        
        </a>
   
    <?php endif; ?>

    </form>



</body>
</html>

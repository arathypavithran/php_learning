<?php
require "dbconnect.php";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch the product details
    $query = "SELECT product.*, category.cat_name, subcategory.subcat_name FROM product LEFT JOIN category ON product.cat_id = category.cat_id LEFT JOIN subcategory ON product.subcat_id = subcategory.subcat_id WHERE product.product_id = $product_id";

    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        die("Product not found!");
    }
}
?>

<h1>View Product</h1>
<p><strong>Product Name:</strong> <?php echo $product['product_name']; ?></p>
<p><strong>Product Rate:</strong> <?php echo $product['product_rate']; ?></p>
<p><strong>Category:</strong> <?php echo $product['cat_name']; ?></p>
<p><strong>Subcategory:</strong> <?php echo $product['subcat_name']; ?></p>
<img src="uploads/<?php echo $product['product_image']; ?>" alt="<?php echo $product['product_name']; ?>" style="max-width: 200px; height: auto;">
<a href="index.php">Back to Dashboard</a>

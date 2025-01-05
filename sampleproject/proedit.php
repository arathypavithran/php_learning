<?php
require "dbconnect.php";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch the product details
    $query = "SELECT * FROM product WHERE product_id = $product_id";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        die("Product not found!");
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_rate = $_POST['product_rate'];
    $cat_id = $_POST['cat_id'];
    $subcat_id = $_POST['subcat_id'];

    // Update query
    $update_query = "UPDATE product SET 
            product_name = '$product_name', 
            product_rate = $product_rate, 
            cat_id = $cat_id, 
            subcat_id = $subcat_id 
        WHERE 
            product_id = $product_id
    ";

    if (mysqli_query($con, $update_query)) {
        header("Location: index.php"); // Redirect to dashboard
    } else {
        echo "Error updating product: " . mysqli_error($con);
    }
}
?>

<form method="POST">
    <label>Product Name:</label>
    <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>" required><br>
    
    <label>Product Rate:</label>
    <input type="number" name="product_rate" value="<?php echo $product['product_rate']; ?>" required><br>
    
    <label>Category:</label>
    <input type="number" name="cat_id" value="<?php echo $product['cat_id']; ?>" required><br>
    
    <label>Subcategory:</label>
    <input type="number" name="subcat_id" value="<?php echo $product['subcat_id']; ?>" required><br>
    
    <button type="submit">Update</button>
</form>

<?php
require "../dbconnect.php";
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit;
// }

$query = "SELECT product.*, category.cat_name, subcategory.subcat_name FROM product LEFT JOIN category ON product.cat_id = category.cat_id LEFT JOIN subcategory ON product.subcat_id = subcategory.subcat_id";

$result = mysqli_query($con, $query);
//$product = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>User Homepage</h1><br><br>


    <div style="margin-left: 139px;">
         <div style="add-button">
            <a href="cartdetails.php" style="text-decoration: none;">
                <button  style=" margin-left: 139px;">
         <div style="background: #18cb83;
    right: 80px;
    position: absolute;
    top: 26px;
    border: 1px solid grey;
    width: 100px;
    height: 45px;" class="add-product">Add Cart</button>
            </a>
    </div>
    </div>

    <form action="userview.php" method="GET">
    <div class="container-fluid">
    <div class="row">
    <?php while ($product = mysqli_fetch_assoc($result)): ?>
    <div class="col">
           
    <img src="../uploads/<?php echo $product['product_image'] ?>" 
                                 alt="<?php echo $product['product_name'] ?>" 
                                 style="height: auto;" /><br>
    <?php echo $product['product_name'] ?><br>
    <?php echo $product['product_rate'] ?><br>

    <!-- Control Array for Quantity -->
    <input type="text" name="qty[<?php echo $product['product_id'] ?>]" placeholder="Enter quantity">
                    
    <!-- "Buy Now" Button with Hidden Product ID -->
    <button type="submit" name="id" value="<?php echo $product['product_id'] ?>">Buy Now</button>

    <!-- <a href="userview.php?id=<?php /*echo $product['product_id'] */ ?>" style="text-decoration: none; margin-right: 10px;"><button style="background-color: blue; color: white;">Buy Now</button></a> -->
</div>
    
<?php endwhile; ?>
</div>
</div>

    </form>



</body>
</html>
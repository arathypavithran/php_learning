<?php
require "../dbconnect.php";


    
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $address = $_POST['address'];
    
    // Insert user into the database
    $user_query = "INSERT INTO users (fname, lname, email, password, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($user_query);
    $stmt->bind_param("sssss", $fname, $lname, $email, $password, $address);

    if ($stmt->execute()) {

        echo "Registration and order placed successfully!";
         header("Location: login.php");
    } 

} 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register and Buy Product</title>
</head>
<body>
    <h1>Register and Buy Product</h1>
    <form method="POST">
        <h2>Registration</h2>
        <label>First Name:</label>
        <input type="text" name="fname" required><br>
        <label>Last Name:</label>
        <input type="text" name="lname" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Address:</label>
        <textarea name="address" required></textarea><br>
        
        <button type="submit">Register and Buy</button>
        
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>url validation</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="site" id="site">
        <input type="submit" value="Submit" name="submit">
    </form>


    <?php 

   if(isset($_POST["submit"])){

    $website = $_POST["site"];

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
       echo $websiteErr;
    }
    
}
    
    ?>
</body>
</html>
<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType = pathinfo($target_file ,PATHINFO_EXTENSION);
if(isset($_POST["submit"])){
    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check){
        echo "File is an image:" . $check["mime"] . "." ;
        $uploadOk=1;
    }
        else{
            echo "File is not an image";
            $uploadOk=0;
        }
    }

    // Check file already exists

    if (file_exists($target_file)){
        echo "File already exists";
        $uploadOk=0; 
    }
    // Check  file size
    if($_FILES["fileToUpload"]["size"] > 500000){
        echo "Sorry the file size is too large";
        $uploadOk=0; 
    }

    

    // Check  file type
    if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg"){
        echo "Sorry,only jpg,png and jpeg images are allowed";
        $uploadOk=0; 
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0){
        echo "Sorry,your file was not uploaded";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "The file" . basename($_FILES["fileToUpload"]["name"]) . "has been uploaded"; 
        }
        else{
            echo "Sorry, there was an error uploading your file.";
        }

    }


?>

<?php

// File download



?>
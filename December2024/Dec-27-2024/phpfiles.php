<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading a file using php</title>
</head>
<body>
<?php 
$filename ="tmp.txt";
$file = fopen($filename , "r");
if($file == false){
    echo ( "Error in opening file" );
    exit();
}
$filesize = filesize($filename);
$filetext = fread($file,$filesize);
fclose($file);
echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );

?>

<?php 
$filename1="newfile.txt";
$file1 =fopen($filename1 ,"w");
if($file1 == false){
    echo ("Error in opening new file");
    exit();
}
fwrite($file1 ,"This is a new text \n");
fclose($file1);

$file = fopen("newfile.txt" , "r");
if($file == false){
    echo ( "Error in opening file" );
    exit();
}
$filesize = filesize($filename);
$filetext = fread($file,$filesize);
fclose($file);
echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );

?>

<?php
$myfile=fopen("tmp.txt" , "r") or die("unable to open file");

while(!feof($myfile)){
    echo fgets($myfile) . "<br>";
    echo fgetc($myfile). "<br>";

}
fclose($myfile);
?>


</body>
</html>
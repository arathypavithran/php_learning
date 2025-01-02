<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<script>
    $(document).ready(function(){
        $("#age").blur(function(){
            const ageDisplay = $("#age").val();
            if(ageDisplay>18){
               alert("You are eligible for vote");
            }else{
                alert ("You are not eligible for vote");

            }
          
        });
    });
</script>

<input type="number" name="age" id="age">
<input type="button" value="submit">



</body>
</html>

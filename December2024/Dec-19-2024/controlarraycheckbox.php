<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form controlls -->
<h3>Profile</h3>
<form action="" method="POST">
<input type="text" name="fname" id="fname" placeholder="Enter first name" required><br><br>
<input type="text" name="lname" id="lname" placeholder="Enter last name"><br><br>
<input type="number" name="age" id="age" placeholder ="Enter your age"><br><br>
<script>
   /* const now = new Date();
    day=now.getFullYear()+"-"+(now.getMonth()+1)+"-"+now.getDate();
    document.write(day);*/
</script>
<?php
 $currentDate = date('Y-m-d'); echo 'date'.$currentDate;
 ?>
<input type="date" name="dob" id="dob" placeholder="DOB" min='<?php echo $currentDate;?>' ><br><br>
<label for="gender">Gender</label>
<input type="date" name="" id="" value="2020-01-01">
<input type="radio" name="gender" id="gender" value="male" checked>Male
<input type="radio" name="gender" id="gender" value="female">Female</br></br>
<label for="hobbies">Hobbies</label>
<input type="checkbox" name="hobbies[]" id="hobbies1" value="abc">ABC
<input type="checkbox" name="hobbies[]" id="hobbies2" value="def">DEF</br></br>

<label for="colours">Choose a colour:</label>

<select name="colours" id="colours">
  <option value="red">Red</option>
  <option value="yellow">Yellow</option>
  <option value="blue">Blue</option>
  <option value="black">Black</option>
</select></br></br>
<textarea name="msg" id="msg">Message</textarea></br></br>

<input type="submit" value="Submit" name="submit"></br></br>
</form>
</body>
</html>

<?php 


if(isset($_POST["submit"])){
    if(isset($_POST['hobbies'])){
        $hobbies = $_POST['hobbies'];
        foreach( $hobbies as $hobbie){
            echo "You selected: " . htmlspecialchars($hobbie) . "<br>";
        }
    } else {
        echo "No options were selected.";
    }
    

    $fname = $_POST["fname"];
    $lname =$_POST["lname"];
    $age =$_POST["age"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    //$hobbies = $_POST["hobbies"];
    $colours =$_POST["colours"];
    $message =$_POST["msg"];
    $valid=true;

    if($fname=="" || $lname==""){
      echo "fname/lname cannot be blank";
      $valid=false;
    }
    if($age<18|| $age>60)
      {
        echo  "age between 18 and 60";
        $valid=false;
      }
      
        

      
    
      if($valid){

    
        echo "Fname". "=" .$fname;
        echo "Lname". "=" .$lname;
        echo "Age"."=".$age;
        echo "DOB"."=".$dob;
        echo "Gender" . "=" .$gender;
       // echo "Hobbies" . "=" .$hobbies;
        echo "Colours" . "=" .$colours;
        echo "Message" . "=" . $message;
      }

    

}
?>
</body>
</html>
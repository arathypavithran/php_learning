<?php
class db
{
    var  $con=mysqli_connect("localhost","root","","sample");
    function executequery($query)
      {
         $result=mysqli_query($this->$con,$query);
         return $result;
      }
     
}

?>
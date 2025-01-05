<?php
class Books{
    var $price;
    var $title;
    function setPrice($par){
        $this->price=$par;
    }
    function getPrice(){
        echo  $this->price . "<br>";
    }

    function setTitle($par){
        $this->title=$par;
    }
    function getTitle(){
        echo  $this->title .":" ;
    }
}

$maths =new Books;
$physics =new Books;
$chemistry =new Books;

$maths->setTitle("Maths");
$physics->setTitle("Physics");
$chemistry->setTitle("Chemistry");

$maths->setPrice(60);
$physics->setPrice(100);
$chemistry->setPrice(150);

$maths->getTitle();
$maths->getPrice();
$physics->getTitle();
$physics->getPrice();
$chemistry->getTitle();
$chemistry->getPrice();


?>
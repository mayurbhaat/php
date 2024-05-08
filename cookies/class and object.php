<?php

class mobile{

    public $name;
    public $price;
    public $brand;

    function insert($a,$b,$c){

     $this ->name=$a;
     $this ->price=$b;
     $this ->brand=$c;

    }

    function show(){

     echo"<h1>mobile is $this->name <br></h1>";   
     echo"<h1>mobile is $this->price<br> </h1>";   
     echo"<h1>mobile is $this->brand<br></h1>";   
    }
}

    $f1=new mobile();
    $f1->insert("v15",15000,"vivo");
    $f1->show();
    
    echo "<br>";

    $f2=new mobile();
    $f2->insert("A11","25000","oppo");
    $f2->show();

    echo "<br>";

    $f3=new mobile();
    $f3->insert("iphone11",45000,"apple");
    $f3->show();

    echo "<br>";
    
    $f4=new mobile();
    $f4->insert("one puls t15",43000,"one puls");
    $f4->show();

?>
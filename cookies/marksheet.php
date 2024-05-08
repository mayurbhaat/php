<?php


echo"<h1>welcome to php</h1>";





function subject($name,$mathes,$english,$science){
    echo "<br>";
    echo $name ;
    echo "<br>";
    echo $mathes;
    echo "<br>";
    echo  $english;
    echo "<br>"; 
    echo  $science;
    echo "<br>";
    echo "<br>";
    $t=$mathes+$english+$science;
    echo $t;
    echo "<br>";
    $pr=$t/3;
    echo "<br>";
    echo $pr;
}

subject("jay","45","66","78");
subject("loki","40","20","45");
















?>
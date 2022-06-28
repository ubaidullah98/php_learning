<?php

//------------------Indexed Array-------------//

$arr[0] = "Ubaid";
$arr[1] = "Azam";
$arr[2] = "Basit";
$arr[3] = "Ahmad";

echo $arr[2]."<br>";

$arr1 = ["Ubaid","Azam","Basit","Ahmad"];

echo $arr1[3]."<br>";
echo count($arr1)."<br>";

foreach($arr1 as $x => $x_value){
    echo "key = $x value = $x_value";
    echo "<br>";
}
echo "<hr>";

//-----------------Associative Array------------//

$age = ["Ubaid"=>"23","Azam"=>"25","Basit"=>"22","Ahmad"=>  "22"];

echo "Basit is ".$age["Basit"]." years old<br>";
echo "Ahmad is ".$age["Ahmad"]." years old<br>";

foreach($age as $y => $y_value){
    echo $y."\n =".$y_value."\n";
}
echo "<hr>";

//-----------------Multiidimensional Arry-----------------//

$multi = array(
    array("Ubaid",60,70),
    array("Azam",90,50),
    array("Basit",80,60)

);

echo $multi[2][2];




?>
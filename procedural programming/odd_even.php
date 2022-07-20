<?php

$i=123450;

if($i%2==0){
    echo "$i the number is even<br>";
}
else{
    echo "$i the number is odd <br>";
}
echo "<hr>";

for($i=2;$i<=20;$i+=2){
    echo "$i<br>";
}
echo "<hr>";

$n=0;
while($n<20){
    $n = $n+2;
    echo "$n<br>";
     
}
echo "<hr>";

for($j=0;$j<=20;$j++){
    if($j%2==0){
        echo "$j<br>";
    }
}


?>
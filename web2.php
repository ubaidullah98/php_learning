
<?php


//---------------CONDITIONAL STATEMENTS-------------------
// $a=10;
// $b=20;

// // if($a<$b){
// //     echo "A is less than B";
// // }
// if($b==$a){
//     echo "B is equal to A";
// }
// else{
//     echo "B is greater than A";
// }

// -----------------------FOR-LOOP------------------------------
// $j=2;
// for($i=1;$i<=10;$i++){
//     echo $j."x".$i."=".$j*$i."<br>";
// }
// echo "<br>";

// $j=3;
// for($i=1;$i<=10;$i++){
//     echo $j."x".$i."=".$j*$i."<br>";
// }
// for($i=0;$i<=20;$i++){
//     echo $i,"<br>";
// }
// echo "<br><hr><br>";

// for($i=20;$i>0;$i--){
//     echo $i,"<br>";
// }

// --------------------SWITCH---------------------------
$i=2;


switch($i){

case 0:
    echo "value is less <br>";
    break;

case 1:
    echo "value is equal <br>";
    break;

case 2:
    echo "value is greater <br>";
    break;

default:
    echo"value not found <br>";
}

var_dump($i);



?>
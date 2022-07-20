<?php

$arr = array(
    'Sname' => "Ahmed",
    'english' =>20,
    'math' => 40,
    'computer'=> 30,

);

$obtained = $arr['english']+$arr['computer']+$arr['math'];
echo " you have obtained $obtained marks from 300 <br>"; 
$per = $obtained*100/300;

echo "your percentage = $per % <br>";

if($per>70 && $per<81){
echo "your CGPA is 2.9 grade is B+";
}
elseif($per>49 && $per<61){
echo "your CGPA is 2.4 and grade is C";
}
elseif($per>60 && $per<71){
echo "your CGPA is 2.7 and grade is C+";
}
elseif($per<50){
echo "you are fail with 0 CGPA grade F";
}
























?>
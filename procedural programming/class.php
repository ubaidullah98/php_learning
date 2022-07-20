<?php

// $a1= array("red","green");
// $a2=array("blue","yellow");

// print_r(array_replace($a1,$a2));

// echo "<hr>";

// $a= array("a"=>"volvo","b"=>"BMW","c"=>"toyota");

// print_r(array_reverse($a));

// echo "<hr>";

// $fruit = ["mango","apple","pear","peach"];

// $fruit = array_flip($fruit);

// echo ($fruit["mango"]);

// echo "<hr>";

// $delete = "march";
// $arr = ["january","february","march","april","may","june"];

// if(($key = array_search($delete,$arr))!=false){
//     unset($arr[$key]);
// }

// print_r($arr);

// echo "<hr>";

// $color = ['white','green',"blue",'red','black'];

// echo "i like ".$color[1]." color but my brother like ".$color[3]." and ".$color[2]." color<br>";

// echo "the ".$color[4]." absorbs more heat then ".$color[0]." .";
// echo "<hr>";



// $temp = [70,78,76,60,62,85,63,64,77,80,81,85];
// $size =count($temp);
// sort($temp);

// echo "list of three lowest tempratures :".$temp[0].",".$temp[1].",".$temp[2]."<br>";

// rsort($temp);

// echo "list of three highest tempratures :".$temp[0].",".$temp[1].",".$temp[2]."<br>";

// $average = array_sum($temp)/count($temp);

// echo "the average temprature is : ".$average;
// echo "<hr>";

// sort($temp);

// echo "the lowest 5 tempratures : ";
// for($i=0;$i<=5;$i++){
//     echo "$temp[$i],";
// }
// echo "<br>";

// echo "the highest 5 temperatures : ";
// for($j=$size-1;$j>=$size-5;$j--){
//     echo "$temp[$j],";
// }
// echo "<br>";

// $sum = 0;
// for($x=0;$x<$size;$x++){
//     $sum = $sum+$temp[$x]/$size;
// }
// echo "the average of temmpratures :".number_format((float)$sum,2);

// echo "<hr>";





// for($i=0;$i<$size;$i++){
//     if($temp[$i]%2==0){
//         echo "this is even. $temp[$i].<br><br>";
//     }
//     else{
//         echo "this is odd ".$temp[$i]."<br><br>";
//     }
// }



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







// echo readfile("main.txt");

// $myfile = fopen("abc.txt","a") or die("cannot open file");
//echo fread($myfile,filesize("mai.txt")); it is for "r"; not for "w"
// fclose($myfile);

// echo fgets($myfile)."<br>";

// while(!feof($myfile)){
//     echo fgets($myfile)."<br>";
// }

// $txt = "<br>";
// fwrite($myfile,$txt);

// $myfile1 = fopen("abc.txt","r") or die("cannot open file");
// echo fread($myfile1,filesize("abc.txt"));

// fclose($myfile);
$a = array(
    array(
        'id' => 500,
        'f/name' => "shahid",
        'lastname' => "ali",
    ),
    array(
        'id' => 501,
        'f/name' => "Muhammad",
        'lastname' => "taha",
    ),
    array(
        'id' => 502,
        'f/name' => "Muhammad",
        'lastname' => "hamza",
    )
    );

    $myfile = fopen("st.txt","w") or die("cannot open file");
    $string = print_r($a,true);
    fwrite($myfile,$string);
    fclose($myfile);

    $myfile = fopen("st.txt","r") or die("cannot open file");
    echo fread($myfile,filesize("st.txt"));
    fclose($myfile);

    

?>
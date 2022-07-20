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

// $multi = array(
//     "A"=>  array("Ubaid",60,70),
//     "B"=>  array("Azam",90,50),
//     "C"=>   array("Basit",80,60)

// );

// echo $multi[2][2];

$num = [4,6,12,3,1,22,10];
sort($num);
print_r($num);
echo "<hr>";

$cars = ["mercedes","suzuki","toyota"];
rsort($cars);
print_r($cars);
echo "<hr>";

$numbers = [4,5,6,12,10,11];
rsort($numbers);
print_r($numbers);
echo "<hr>";

$age = ["ali"=>"35","babar"=>"37","basit"=>"30"];
asort($age);
print_r($age);
echo "<hr>";


$num1 = [1,4,6,7,8,10];
sort($num1);
echo $num1[5]."<br>";

print_r(array_change_key_case($age,CASE_UPPER));
print_r(array_change_key_case($age,CASE_LOWER));

echo "<hr>";

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

    $last_name = array_column($a,'lastname');
    print_r($last_name);
    echo "<hr>";

    $fname = ["ali","hamza","basit"];
    $age = ["35","56","55"];

    $c = array_combine($fname,$age);
    print_r($c);
    echo "<hr>";

    $x=["a"=>"red","b"=>"blue"];
    $y=["c"=>"green","d"=>"blue"];


    $result = array_diff($x,$y);
    print_r($result);
    echo "<hr>";

    $a1 = array_fill(0,4,"blue");
    print_r($a1);
    echo "<br>";

    $b1 = array_fill(0,4,array("red","blue"));
    print_r($b1);
    echo "<br>";

    $a2 = ["a"=>"red","b"=>"blue","c"=>"green"];
    $flip = array_flip($a2);
    
    print_r($flip);
    echo "<br>";
    print_r(array_keys($a2));
    echo "<br>";

    $f = ["red","green"];
    $g = ["blue","yellow"];

    print_r(array_merge($g,$f)); echo "<br>";
    print_r(array_combine($f,$g)); echo "<br>";

    echo array_search("red",$x); echo "<br>";

    $delete_item = "friday";
    $weeks = ["monday","tuesday","wednesday","thursday","friday"];

    if(($key = array_search($delete_item,$weeks))==true){
        unset($weeks[$key]);

    }
    print_r($weeks);
    echo "<br>";

    // $array = ["azam","basit","ubaid","ahmad"];
    // $delete = "azam";
    // if($key = array_search($delete,$array)!==false){
    //     unset($array[$key]);
    // }
    // print_r($array);
    $delete_it = "ubaid";
    $arr10 = ["azam","ahmad","ubaid","ajay"];
  

    if(($key1 = array_search($delete_it,$arr10))==true){
         unset($arr10[$key1]);
    }
    print_r($arr10);

    echo "<br>"."<hr>";

    $random_keys = array_rand($arr10,3);

    echo $arr10[$random_keys[0]]."<br>";
    echo $arr10[$random_keys[1]]."<br>";
    echo $arr10[$random_keys[2]];
?>
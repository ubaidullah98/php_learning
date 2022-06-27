<?php

function abc(){
    echo "hello world<br>";

}
abc();

function bcd(){
    for($i=0;$i<=5;$i++){
        echo "hello<br>";
    }
}

bcd();

//<--------------------ARGUMENTAL FUNCTION--------------------->

function xyz($name){
    echo "my name is $name"."<br>";
}

xyz("ubaid");
xyz("azam");
xyz("basit");


function jkl($name,$dob){
    echo "my name is $name and DOB is $dob <br>";

}
jkl("Ubaid","1998");

function add($num1,$num2){
    return $num1+$num2;
}
echo add(10,20);

function adding($num,$days){
    return $num + $days;
}
echo adding(10,"5 days");
echo "<hr>";

function vote($age){
    if($age>=18){
        echo "you are eligible for vote";
    }
    else{
        echo "you are not eligible for vote";
    }
    

}
vote(18);

?>
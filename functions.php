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

?>
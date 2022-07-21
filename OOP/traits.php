<?php


trait t1 {
    function abc(){
        echo "i am from trat T1";
    }
}

trait t2 {
    function xyz(){
        echo "i am from trait t2";
    }
}


class msg {
    use t1;
}

class msg2 {
    use t1,t2;
}


$msg = new msg();
$msg2 = new msg2();

$msg2->abc();
$msg2->xyz();
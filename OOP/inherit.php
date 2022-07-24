<?php

class animal{
    public $name;

    function __construct($nm)
    {
    
        echo "hello".$this->name = $nm;
    }

    public function move(){
        echo " Move";
    }
}

class dog extends animal{
    function __construct()
    {
        echo "this is child class dog";
    }

    public function growl(){
        echo " the dog is growling";
    }
}

class duck extends animal{
    function __construct()
    {
        echo "this is child class duck";
    }

    public function quack(){
        echo " the duck is quacking";
    }
}

$dog = new dog("dog");
$dog -> growl();
$dog -> move();

echo "<hr>";

$duck = new duck("duck");
$duck -> quack();
$duck -> move();

echo "<hr>";

$anim = new animal(" elephant");
$anim -> move();


?>
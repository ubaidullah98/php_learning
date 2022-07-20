<?php

class fruit{
    public $name;
    public $color;

    function __construct($name,$color){

        $this->color = $color;
        $this->name = $name;

    }

    public function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}.";
    }

    function __destruct()
    {
        echo "GOOD BYE PARENT";
    }

}


class strawberry extends fruit{
    public function message(){
        echo "i am straberry";
    }

    function __construct()
    {
        echo "HELLO CHILD";
    }
    
    function __destruct()
    {
        echo "GOOD BYE CHILD";
    }
}

$strawberry = new strawberry("strawberry","red");
$strawberry->message();
$strawberry->intro();

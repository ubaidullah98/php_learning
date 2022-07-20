<?php
// class House{
//     public $primaryColor = "black";

//     public $haspool = true;

//     public $extra;

//     public function test($string){
//         echo $string;
//     }
//     public function changeColor($color){

//         $this->primaryColor = $color;
//     }
// }

// $myHouse = new House();
// $friendHouse = new House();
// $ourHouse = new House();


// echo $myHouse->changeColor('yellow');

// echo "<br>";
// //echo $myHouse -> haspool = false;
// echo "my friend house color is : ".$friendHouse -> changeColor('pink');
// echo "<br>";    
// echo $friendHouse -> haspool;
// echo "<br>";
// echo $ourHouse -> primaryColor;
// echo "<br>";

// echo $myHouse -> test("hello world");


// class fruit{
//     public $fruitname;
//     public function fname($name){
//         $this->fruitname = $name;
//     }

//     public $primaryColor;
//     public function color($color){
//         $this->primaryColor = $color;
//     }

//     public function __construct(){
//         echo "hello world";
//     }
// }

// $banana = new fruit();

// $banana->fname("banana");
// echo $banana->fruitname;
// echo "<br>";
// $banana->color("yellow ");
// echo $banana->primaryColor;
// class fruit{
//     public $name;
//     public $color;

//     function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;
//     }
    
//     function __destruct()
//     {
//         echo "the fruit is {$this->name} and the color is {$this->color}";
//     }
        
//     }


//     $apple = new fruit("apple","red");

// class User{
//     public $firstname = "Ali";
//     public $lastname = "Ahmed";

//     public function hello($firstname,$lastname){
//         $this->firstname = $firstname;
//         $this->lastname = $lastname;
//     }

// }

// $user1 = new User();
// $user1->hello("Ubaid","bhutto");
// echo "hello ".$user1->firstname." ".$user1->lastname;

// echo"<br><br>";

// $user2 = new User();
// $user2->hello("Ahmad","Hussain");
// echo "hello ".$user2->firstname." ".$user2->lastname;

// echo "<br><br>";

// $user3  = new User();
// echo $user3 ->firstname.$user3 ->lastname; 


class books{
    public $name;
    public $price;
    public $author;

    public function name($name){
        $this->name = $name;
    }

    public function price($price){
        $this->price = $price;

    }

    public function author($author){
        $this->author = $author;
    }

    //  function __construct()
    //  {


    //      echo "hello and welcome";
    //  }

    // function __destruct()
    // {
    //     echo "good bye";
    // }
}

$price = new books();
$name = new books();
$author = new books();

$price->price(300);
$name->name("programming");
$author->author("Ubaid");

echo "book name : ".$name->name."<br>"."price : ".$price->price."<br>"."author : ".$author->author;

?>

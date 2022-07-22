<?php
//Static method can be call without creating the instance of class

class human{
    public static function gender1(){
        echo "MALE";
    }

    public static function gender2(){
        echo "FEMALE";
    }
}

human::gender1();
human::gender2();
<?php


interface class1{
    function test1();
}

interface class2{
    function test2();
}

class class3 implements class1,class2{

    function test1(){
        echo " i am from TEST1";
    }

    function test2(){
        echo " i am from TEST2";
    }

}

$obj = new class3;

$obj->test1();
$obj->test2();
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';


$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    die('could not connect :'.mysqli_error());

}



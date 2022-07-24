<?php

include("sql.php");

$sql = "Create Database test1_db";
$retval = mysqli_query($conn,$sql);

if(!$retval){
    die("Could not createn database : ".mysqli_error());


}

echo "Database test_db created successfully \n";


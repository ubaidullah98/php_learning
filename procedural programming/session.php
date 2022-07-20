<?php
// session_start();

// $_SESSION["firstname"] = "UBAID";
// $_SESSION["lastname"] = "BHUTTO";


$arr = array(
    array("Ali",67,90),
    array("hamza",70,80),
    array("taha",90,70),
);

for($row=0;$row<=3;$row++){
    echo "<br>";
    for($col=0;$col<=2;$col++){
        echo $arr[$row][$col]." ";
    }
}




?>
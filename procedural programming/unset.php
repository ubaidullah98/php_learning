<?php

$delete = "azam";
    $arr10 = ["azam","ahmad","ubaid"];
  

    if($key1 = array_search($delete,$arr10)==true){
         unset($arr10[$key1]);
    }
    print_r($arr10);
?>

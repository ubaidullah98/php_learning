<?php

setcookie("ubaid","web-development",time()+30*86400);


if(isset($_COOKIE["ubaid"]))
{
    echo "Cookie ubaid is set ".$_COOKIE["ubaid"];

}else{
    echo "ubaid is not set";
}






?>
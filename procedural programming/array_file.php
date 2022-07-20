<?php

$a = array(
    array(
        'id' => 500,
        'f/name' => "shahid",
        'lastname' => "ali",
    ),
    array(
        'id' => 501,
        'f/name' => "Muhammad",
        'lastname' => "taha",
    ),
    array(
        'id' => 502,
        'f/name' => "Muhammad",
        'lastname' => "hamza",
    )
    );

    $myfile = fopen("st.txt","w") or die("cannot open file");
    $string = print_r($a,true);
    fwrite($myfile,$string);
    fclose($myfile);

    $myfile = fopen("st.txt","r") or die("cannot open file");
    echo fread($myfile,filesize("st.txt"));
    fclose($myfile);


?>
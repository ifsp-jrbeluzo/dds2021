<?php

    $x = array("a","b","c","d","e","f");

    print_r($x);

    $x = null;

    echo "<hr />";
 
    $x = ["a","b","c","d","e","f"];

    print_r($x);

    $x = null;

    echo "<hr />";

    $x = ["0"=>"a","1"=>"b","2"=>"c","3"=>"d","4"=>"e","5"=>"f"];

    print_r($x);

    $x = null;

    echo "<hr />";

    $x[0]="a";
    $x[1]="b";
    $x["abc"]="c";
    $x[3]="d";
    $x["ziriguidum"]="e";
    $x[5]="f";

    print_r($x);
    echo "<hr />";


    foreach($x as $i=>$v){
        echo "$i=>$v<br />";
    }

?>
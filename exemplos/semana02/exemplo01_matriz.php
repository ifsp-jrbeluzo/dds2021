<?php

$y = [
        "0"=>["0"=>"a","1"=>"b","2"=>"c","3"=>"d","4"=>"e","5"=>"f"],
        "1"=>["0"=>"g","1"=>"h","2"=>"i","3"=>"j","4"=>"k","5"=>"l"]
    ];

    print_r($y);

    echo "<hr />";

    $y = null;

$y[0][0]="a";
$y[0][1]="b";
$y[0][2]="c";
$y[0][3]="d";
$y[0][4]="e";
$y[0][5]="f";

$y[1][0]="g";
$y[1][1]="h";
$y[1][2]="i";
$y[1][3]="j";
$y[1][4]="k";
$y[1][5]="l";


foreach($y as $i=>$v){

    echo "[$i]: <br />";
    foreach($v as $j=>$v2){
        echo "[$j] => $v2 <br />";
    }

}


?>
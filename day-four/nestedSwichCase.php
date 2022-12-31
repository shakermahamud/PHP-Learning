<?php

$n = -11;
$r = $n%2;

switch($r){
    case 0:
        switch($n){
            case $n>0:
                echo $n.' is a pogative even number';
                break;
            case $n<0:
                echo $n.' is a negative even number';
                break;
        }
        break;
    default:
        switch($n){
            case $n>0:
                echo $n.' is a pogative odd number';
                break;
            case $n<0:
                echo $n.' is a negative odd number';
                break;
        }
}

switch(true){
    case(0==$r && $n>0):
        echo $n.' is a pogative even number';
        break;
    case(1==$r && $n>0):
        echo $n.' is a pogative odd number';
        break;
    case(0==$r && $n<0):
        echo $n.' is a negative even number';
        break;
    case(-1==$r && $n<0):
        echo $n.' is a nevative odd number';
}


$balls = "5balls";

switch($balls){
    case (string)"6balls":
        echo 'Six Balls';
        break;
    case (string)5:
        echo "5";
        break;
    case (string)"5balls":
        echo 'Five balls';
        break;
}



<?php


// if else alternative syntex 
$condition_one = true;
$condition_two = true;
$condition_three = true;


if($condition_one && $condition_two && $condition_three):
    echo 'Hello World';
elseif($condition_one && $condition_two):
    echo 'No One';
elseif($condition_one):
    echo 'No Two';
else:
    echo 'No Three';
endif;

// swich case alternative syntex 

echo PHP_EOL;

$n = 11;
$r = $n%2;

switch(true):
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
endswitch;

echo PHP_EOL;

switch($r):
    case 0:
        switch($n):
            case $n>0:
                echo $n.' is a pogative even number';
                break;
            case $n<0:
                echo $n.' is a negative even number';
                break;
        endswitch;
        break;
    default:
        switch($n):
            case $n>0:
                echo $n.' is a pogative odd number';
                break;
            case $n<0:
                echo $n.' is a negative odd number';
                break;
        endswitch;
endswitch;

<?php

$condition_one = true;
$condition_two = true;
$condition_three = true;

if($condition_one){
    if($condition_two){
        if($condition_three){
            echo "Hello World";
        }else{
            echo "No One";
        }
    }else{
        echo "No Two";
    }
}else{
    echo "No Three";
}

echo "\n";

if($condition_one && $condition_two && $condition_three){
    echo 'Hello World';
}elseif($condition_one && $condition_two){
    echo 'No One';
}elseif($condition_one){
    echo 'No Two';
}else{
    echo 'No Three';
}
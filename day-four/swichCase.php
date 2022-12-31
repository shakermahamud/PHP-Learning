<?php
$color = "red";

switch($color){
    case 'red':
        echo 'Red is our favorite color';
        break;
    case 'yellow':
        echo 'Yellow is our favorite color';
        break;
    case 'green':
        echo 'Green is our favorite color';
        break;
    case 'orange':
        echo 'Orange is our favorite color';
    default;
        echo 'this color is not our favorite color';
}

switch($color){
    case 'red':
    case 'yellow':
    case 'green':
    case 'gray':
    case 'orange':
        echo ucwords($color).' is our favorite color';
        break;
    default;
        echo 'this color is not our favorite color';
}
<?php

$condition_1 = false;
$condition_2 = true;
$condition_3 = true;
$condition_4 = true;


$allResult = ($condition_1 && $condition_2 && $condition_3 && $condition_4) ? "Hello World" :(($condition_1 && $condition_2 && $condition_3) ? "No One" : (($condition_1&& $condition_2) ? "No Two": ($condition_1 ? "No Three" :"No Four")));
echo $allResult;
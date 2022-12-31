<?php
// leab year

$year = 2041;

if($year%4==0 && $year%100==0 && $year%400==0){
    echo "{$year } is leab year";
}elseif($year%4==0 && $year%100==0){
    echo "{$year} is leab year";
}elseif($year%4==0){
    echo "{$year} is leab year";
}else{
    echo "{$year} is not leab year";
}
echo "\n";

if( $year%4==0 && ($year%100!=0 || $year%400==0 )){
    echo "{$year} is leab year";
}else{
    echo "{$year} is not leab year";
}
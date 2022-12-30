<?php

$fName= 'Shaker';
$mName= 'Ullah';
$lName= 'Mahamud';

printf('My name is %s %s %s',$fName,$mName,$lName);
echo "\n";
printf('My name is %1$s %3$s %2$s',$fName,$mName,$lName); 
echo "\n";
printf('This number eqivalent %1$d to %1$b',42525);
echo "\n";

$n = 45.455465456456465465;
printf('%.2f',$n);
echo "\n";



// output -- 
// 0000456245
// 0000789542
$m = 25123453;
$o= 95012;

printf('%09d',$m);
echo "\n";
printf('%09d',$o);
echo "\n";
$m = 52.125456;
$o= 321.23521;
printf('%09.2f',$m);
echo "\n";
printf('%09.2f',$o);



<?php
define('text','lorem ipsum dolor site amit.');
$firstName = "Shaker ";
$lastName = "Ullah";
define('name','Shaker Mahamud');
echo name;
echo "\n";
var_dump($firstName);
printf(text);
echo "\n";
printf('This number is %s',5);
echo "\n";
$s = sprintf(text);
echo $s;

$a = 10;
$b = 20;

printf($b-$a);
echo "\n";
printf($a*$b);
echo "\n";
printf($a**10);
echo "\n";
printf($b/$a);
echo "\n";
printf($a+$b);

for($i=0;$i<=10;$i++){
    if($i==5){
        continue;
    }
    printf("This number is {$i}\n");
}
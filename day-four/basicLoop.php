<?php
// for 
for($i=0;$i<=10;$i++){
    echo $i.PHP_EOL;
}
// While
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
// Do While
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

// Go To
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;
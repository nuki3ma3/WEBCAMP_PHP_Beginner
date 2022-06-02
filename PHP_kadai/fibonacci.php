<?php
$i=1;
$j=0;
echo $j;
echo "\n";
echo $i;
echo "\n";
while(($k=$i+$j)<10000){
    
$i=$j;
$j=$k;
$k=$i+$j;
echo "{$k}";
echo "\n";
}
